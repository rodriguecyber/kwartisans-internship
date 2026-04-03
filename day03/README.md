# Day 03 - CSV to MySQL Import

## Overview
Day 03 focuses on reading the CSV file generated on Day 02 and importing the records into a MySQL database using PHP and PDO.

The script reads user data from `day02/users.csv`, validates each row, inserts new records into a `users` table, and skips invalid or duplicate entries.

## Files

- `read_and_insert_data.php` - Main PHP script that loads environment variables, connects to MySQL, creates the table if needed, and imports CSV data
- `schema.sql` - Optional SQL schema for manually creating the database and `users` table
- `.env.example` - Example database environment variables used by the script

## Requirements

- PHP 8+ with PDO MySQL enabled
- MySQL server running locally or remotely
- A root-level `.env` file in the project directory
- `day02/users.csv` already generated

## Environment Setup

The script loads environment variables from the root `.env` file:

```env
DB_HOST=127.0.0.1
DB_PORT=3306
DB_NAME=test
DB_USER=root
DB_PASS=
```

Note: `read_and_insert_data.php` reads `../.env`, not `day03/.env`.

## How It Works

1. Loads database credentials from the root `.env` file
2. Locates `day02/users.csv`
3. Connects to MySQL using PDO
4. Creates the `users` table if it does not already exist
5. Reads the CSV file row by row
6. Validates each row before inserting
7. Skips malformed rows, empty values, negative ages, and duplicate emails
8. Prints a final import summary

## Validation Rules

- A row must contain at least 3 columns
- `name` must not be empty
- `email` must not be empty
- `age` must be zero or greater
- Duplicate emails are skipped because `email` is unique in the database

## Run The Script

From the project root:

```bash
php day03/read_and_insert_data.php
```

Example output:

```text
Import complete: 100 inserted, 0 skipped
```

## Manual Database Setup

If you want to create the schema manually before running the script:

```bash
mysql -u root -p < day03/schema.sql
```

The script can also create the `users` table automatically if the database already exists.

## Notes

- The CSV file is expected at `day02/users.csv`
- Imports run inside a database transaction
- Insert errors are reported to standard error and counted as skipped rows
- Duplicate records are ignored through `ON DUPLICATE KEY UPDATE`
