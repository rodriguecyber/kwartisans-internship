# Day 02 - Daily Summary

## Overview
A Machine Learning Engineer spends 80% of their time cleaning data. Day 02 focused on resume improvement, PHP data generation, and algorithm problem-solving.

## Tasks Completed

### 1. Job Readiness - The Resume 

- **Task:** Compare resume with Senior Engineer's LinkedIn profile

- **Action Items:**
  - Research Senior Engineer's resume on LinkedIn
  - Extract technical keywords missing from personal resume
  -  Document findings

### 2. Task - The Data Generator 

- **Task:** Create PHP script to generate CSV with 100 fake users
- **Details:**
  - **File Created:** `generate.php`
  - **Output:** `users.csv` with 100 fake users
  - **Columns:** Name, Email, Age
  - **Branch:** `feat/php-generator`
  - **Commit:** `feat: add PHP script to generate CSV with 100 fake users`

#### Script Overview
The `generate.php` script:
- Uses randomly selected first and last names from predefined arrays
- Generates email addresses in format: `firstname.lastname@domain.com`
- Assigns random ages between 18 and 80
- Creates properly formatted CSV file using PHP's `fputcsv()` function
- Generates all 100 users with unique combinations

**Sample Output (users.csv):**
```
Name,Email,Age
James Smith,james.smith@gmail.com,45
Mary Johnson,mary.johnson@yahoo.com,32
Robert Williams,robert.williams@outlook.com,58
...
```

### 3. LeetCode Challenge - Palindrome Number 

- **Problem:** Check if a number is a palindrome

- **Details:**

  - **Solution Approach:** Mathematical  passed
  - **Runtime:** 6 ms (Beats 27.64%)
  - **Memory:** 20.33 MB (Beats 53.14%)
  - **Submitted:** April 02, 2026 20:23

### All edge cases handled:
- Negative numbers → false
- Single digits → true
- Numbers ending in 0 (except 0) → false
- Proper palindromes (121, 1331, 12321) → true

**LeetCode Submission Image:**

![alt text](image.png)



### 4. Documentation 

- **Tasks:**
  - Write Daily Summary 
  - Push code to GitHub



## Key Learnings
1. **PHP File Handling:** Used `fopen()`, `fputcsv()`, and `fclose()` for CSV generation
2. **Data Generation:** Implemented random selection from arrays for realistic fake data

3. **Algorithm Problem-Solving:** Implemented mathematical number reversal for palindrome checking
4. **Algorithm Optimization:** Compared multiple approaches (String, Math, Array) for space/time tradeoffs
5. **LeetCode Submission:** Successfully passed all test cases with optimal solution

## Files Created
- `generate.php` - Generates 100 fake users to CSV (Branch: feat/php-generator)

- `DAILY_SUMMARY.md` - This documentation file



