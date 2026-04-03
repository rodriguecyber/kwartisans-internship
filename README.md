# Artisan Internship Documentations

## Day 01: Git and GitHub Basics

Day 01 focused on learning Git and GitHub basics and creating the initial repository that will be used throughout the 20-day internship period.

## Day 02: PHP Data Generation & Algorithm Practice

Day 02 focused on building PHP data generation skills and algorithm problem-solving. A Machine Learning Engineer spends a large portion of their time preparing and cleaning data.

### Tasks Completed

- **Resume Enhancement:** Researched Senior Engineer resumes for technical keywords
- **Data Generator:** Created a PHP script to generate 100 fake users in CSV format
- **LeetCode Challenge:** Solved the "Palindrome Number" problem with multiple approaches
- **Documentation:** Added daily progress tracking and code documentation

## Day 03: CSV Import Into MySQL

Day 03 focused on taking the CSV generated in Day 02 and importing it into a MySQL database using PHP and PDO.

### Tasks Completed

- **Environment Setup:** Configured database credentials with a root `.env` file
- **Database Import Script:** Built a PHP script to read CSV data and insert it into MySQL
- **Validation:** Added checks for malformed rows, empty values, negative ages, and duplicate emails
- **Documentation:** Added setup and usage notes for Day 03

## Project Structure

```text
kwartisans-internship/
|-- README.md
|-- .env
|-- day02/
|   |-- generate.php
|   |-- users.csv
|   `-- DAILY_SUMMARY.md
`-- day03/
    |-- read_and_insert_data.php
    |-- schema.sql
    |-- .env.example
    `-- README.md
```

## File Descriptions

### `day02/generate.php`

- **Purpose:** Generates a CSV file with 100 fake users
- **Output:** `users.csv` with columns `Name`, `Email`, and `Age`
- **Features:** Random name generation, email creation, and age assignment

### `day02/DAILY_SUMMARY.md`

- **Purpose:** Comprehensive daily progress documentation for Day 02
- **Content:** Task details, code explanations, learnings, and next steps

### `day03/read_and_insert_data.php`

- **Purpose:** Reads `day02/users.csv` and imports the data into MySQL
- **Input:** CSV data and root `.env` database credentials
- **Features:** Table creation, row validation, duplicate skipping, and transaction-based import

### `day03/README.md`

- **Purpose:** Day 03 setup and usage documentation
- **Content:** Requirements, environment setup, run command, schema notes, and validation rules

## Technologies Used

- **PHP:** Data generation and database import scripting
- **MySQL:** Storage for imported user records
- **PDO:** Secure database connection and prepared statements
- **Git:** Version control and branch-based workflow
- **CSV:** Simple data exchange format
- **LeetCode:** Algorithm practice platform

## Getting Started

1. Clone the repository:

```bash
git clone <repository-url>
cd kwartisans-internship
```

2. Generate the CSV file:

```bash
php day02/generate.php
```

3. Configure the root `.env` file with your MySQL credentials.

4. Import the CSV data into MySQL:

```bash
php day03/read_and_insert_data.php
```

## Documentation

- Open `day02/DAILY_SUMMARY.md` for Day 02 details
- Open `day03/README.md` for Day 03 setup and usage
- Check `README.md` for the project overview
