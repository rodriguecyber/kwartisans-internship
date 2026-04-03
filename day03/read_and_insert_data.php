<?php

// 🔹 Load .env manually
function loadEnv($path)
{
    if (!file_exists($path)) {
        throw new Exception(".env file not found");
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue;

        list($name, $value) = explode('=', $line, 2);
        $_ENV[trim($name)] = trim($value);
    }
}

loadEnv(__DIR__ . '/../.env');

// 🔹 Get env variables
$host = $_ENV['DB_HOST'];
$dbname = $_ENV['DB_NAME'];
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASS'];

// 🔹 CSV path
$csvPath = realpath(__DIR__ . '/../day02/users.csv');

if (!$csvPath || !file_exists($csvPath)) {
    fwrite(STDERR, "Error: users.csv not found\n");
    exit(1);
}

// 🔹 DB connection
try {
    $db = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password
    );
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    fwrite(STDERR, "DB connection failed: " . $e->getMessage() . "\n");
    exit(1);
}

// 🔹 Create table
$db->exec(
    "CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL UNIQUE,
        age INT CHECK (age >= 0),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB;"
);

// 🔹 Insert
$insertStmt = $db->prepare(
    "INSERT INTO users (name, email, age)
     VALUES (:name, :email, :age)
     ON DUPLICATE KEY UPDATE email = email"
);

// 🔹 Read CSV
if (($handle = fopen($csvPath, 'r')) === false) {
    fwrite(STDERR, "Error: cannot open CSV\n");
    exit(1);
}

fgetcsv($handle); // skip header

$db->beginTransaction();
$inserted = 0;
$skipped = 0;

while (($row = fgetcsv($handle)) !== false) {
    if (count($row) < 3) {
        $skipped++;
        continue;
    }

    $name = trim($row[0]);
    $email = trim($row[1]);
    $age = (int) trim($row[2]);

    if ($name === '' || $email === '' || $age < 0) {
        $skipped++;
        continue;
    }

    try {
        $insertStmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':age' => $age
        ]);

        if ($insertStmt->rowCount() > 0) {
            $inserted++;
        } else {
            $skipped++;
        }
    } catch (Exception $e) {
        fwrite(STDERR, "Insert error: " . $e->getMessage() . "\n");
        $skipped++;
    }
}

$db->commit();
fclose($handle);

echo "Import complete: $inserted inserted, $skipped skipped\n";