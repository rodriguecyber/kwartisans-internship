<?php

$firstNames = ['James', 'Mary', 'Robert', 'Patricia', 'Michael', 'Jennifer', 'William', 'Linda', 'David', 'Barbara', 'Richard', 'Susan', 'Joseph', 'Jessica', 'Thomas', 'Sarah', 'Charles', 'Karen', 'Christopher', 'Nancy', 'Daniel', 'Lisa', 'Matthew', 'Betty', 'Anthony', 'Margaret', 'Mark', 'Sandra', 'Donald', 'Ashley', 'Steven', 'Kimberly', 'Paul', 'Donna', 'Andrew', 'Carol', 'Joshua', 'Michelle', 'Kenneth', 'Emily', 'Kevin', 'Melissa', 'Brian', 'Deborah', 'George', 'Stephanie', 'Edward', 'Rebecca', 'Ronald', 'Sharon'];

$lastNames = ['Smith', 'Johnson', 'Williams', 'Brown', 'Jones', 'Garcia', 'Miller', 'Davis', 'Rodriguez', 'Martinez', 'Hernandez', 'Lopez', 'Gonzalez', 'Wilson', 'Anderson', 'Thomas', 'Taylor', 'Moore', 'Jackson', 'Martin', 'Lee', 'Perez', 'Thompson', 'White', 'Harris', 'Sanchez', 'Clark', 'Ramirez', 'Lewis', 'Robinson', 'Young', 'Stroh', 'King', 'Wright', 'Lopez', 'Hill', 'Scott', 'Green', 'Adams', 'Nelson', 'Carter', 'Roberts', 'Phillips', 'Campbell', 'Parker', 'Evans', 'Edwards', 'Collins', 'Reeves', 'Stewart'];

$domains = ['gmail.com', 'yahoo.com', 'outlook.com', 'hotmail.com', 'example.com', 'test.com', 'mail.com', 'email.com'];

// Create CSV file
$csvFile = 'users.csv';
$file = fopen($csvFile, 'w');

// Write header
fputcsv($file, ['Name', 'Email', 'Age']);

// Generate 100 fake users
for ($i = 0; $i < 100; $i++) {
    $firstName = $firstNames[array_rand($firstNames)];
    $lastName = $lastNames[array_rand($lastNames)];
    $name = "$firstName $lastName";
    
    $email = strtolower($firstName . '.' . $lastName . '@' . $domains[array_rand($domains)]);
    
    $age = rand(18, 80);
    
    fputcsv($file, [$name, $email, $age]);
}

fclose($file);

echo "CSV file '$csvFile' has been created with 100 fake users.\n";
