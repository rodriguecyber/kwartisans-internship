# Artisan Internship fork Documentations

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
- **LeetCode Challenge:** Solved the "Roman to Integer" problem in PHP with an accepted submission

## Day 04: Node.js API Layer

Day 04 focused on creating the API layer with Node.js and Express so the database records can be exposed to other services.

### Tasks Completed

- **Node Project Setup:** Initialized a new npm project in `day04`
- **Express Server:** Created `server.js` to start a local API server
- **Database Endpoint:** Added `GET /users` to query the MySQL `users` table and return JSON
- **LeetCode Challenge:** Solved the "Valid Parentheses" problem in PHP with an accepted submission
- **Documentation:** Added Day 04 setup and usage notes
- **Future Readiness:** Prepared the backend for Python ML integration next week

## Day 05: Refactoring and Weekly Retrospective

Day 05 focused on reviewing the week's work, improving readability, preparing for interviews, and documenting lessons learned.

### Tasks Completed

- **Refactoring:** Reviewed the PHP and Node.js scripts and added comments to improve readability
- **Documentation Review:** Confirmed the repository README explains how to run the PHP import script and the Node server
- **LeetCode Challenge:** Documented a PHP solution for "Merge Two Sorted Lists"
- **Mock Interview Prep:** Wrote a bug-fixing story based on the Day 04 Node.js API work
- **Weekly Retrospective:** Added notes for the Week 1 report and explained `git merge` vs `git rebase`

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
    |-- README.md
    `-- roman-to-integer-submission.png
`-- day04/
    |-- package.json
    |-- package-lock.json
    |-- server.js
    |-- image.png
    `-- README.md
`-- day05/
    |-- merge_two_sorted_lists.php
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
- **Content:** Requirements, environment setup, run command, schema notes, validation rules, and LeetCode submission notes

### `day04/server.js`

- **Purpose:** Starts the Express server and exposes API routes
- **Input:** Root `.env` database credentials and the MySQL `users` table
- **Features:** Loads environment variables, connects with `mysql2`, and returns users as JSON

### `day04/README.md`

- **Purpose:** Day 04 setup and usage documentation
- **Content:** Requirements, installation steps, run command, endpoint behavior, LeetCode notes, and progress summary

### `day04/image.png`

- **Purpose:** Screenshot of the accepted LeetCode submission for Day 04
- **Content:** Valid Parentheses submission metrics and accepted result

### `day05/merge_two_sorted_lists.php`

- **Purpose:** PHP implementation of the Day 05 LeetCode challenge
- **Content:** Iterative merge logic for combining two sorted linked lists

### `day05/README.md`

- **Purpose:** Day 05 summary and weekly retrospective documentation
- **Content:** Refactoring notes, mock interview prep, LeetCode explanation, and Week 1 reflection

## Technologies Used

- **PHP:** Data generation and database import scripting
- **MySQL:** Storage for imported user records
- **Node.js:** Backend runtime for the API layer
- **Express.js:** HTTP server and routing
- **mysql2:** Promise-based MySQL access in Node.js
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

5. Install the Node.js API dependencies:

```bash
cd day04
npm install
```

6. Start the Node.js API:

```bash
cd day04
npm start
```

## Documentation

- Open `day02/DAILY_SUMMARY.md` for Day 02 details
- Open `day03/README.md` for Day 03 setup and usage
- Open `day04/README.md` for Day 04 API setup and usage
- Open `day05/README.md` for Day 05 refactoring and weekly retrospective notes
