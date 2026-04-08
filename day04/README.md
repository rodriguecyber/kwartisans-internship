# Day 04 - Node.js API Layer

## Overview
Day 04 focuses on building the API layer with Node.js and Express.

The server reads the same MySQL database used in Day 03 and exposes a `GET /users` endpoint that returns all users as JSON. This prepares the project for next week's Python ML model integration.

## Files

- `server.js` - Express server with the `GET /users` API endpoint
- `package.json` - Node project metadata, start script, and dependencies
- `package-lock.json` - Locked dependency versions from npm install

## Requirements

- Node.js 20+
- npm
- MySQL running with the `users` table already populated
- Root `.env` file configured in the project directory

## Environment Setup

The API reads database credentials from the root `.env` file:

```env
DB_HOST=127.0.0.1
DB_PORT=3306
DB_NAME=test
DB_USER=root
DB_PASS=
PORT=3000
```

`PORT` is optional. If it is missing, the server defaults to `3000`.

## Install Dependencies

From the Day 04 folder:

```bash
npm install
```

## Run The Server

From the Day 04 folder:

```bash
npm start
```

When the server is running, open:

```text
http://localhost:3000/users
```

## API Response Example

```json
[
  {
    "id": 1,
    "name": "James Smith",
    "email": "james.smith@gmail.com",
    "age": 45,
    "created_at": "2026-04-03T14:20:00.000Z"
  }
]
```

## LeetCode Challenge

**Problem:** Valid Parentheses



### Submission Screenshot

![Valid Parentheses LeetCode submission](./image.png)

### Approach Summary

The solution uses a stack to track opening brackets as the string is scanned from left to right. A mapping is used so each closing bracket can be checked against the most recent opening bracket.

If the current character is an opening bracket, it is pushed onto the stack. If it is a closing bracket, the algorithm pops the last opening bracket and verifies that the pair matches. If a mismatch happens at any point, the string is invalid immediately.

At the end, the string is valid only if the stack is empty. This makes the solution efficient and easy to reason about for nested and sequential bracket patterns.

## Daily Progress

- Initialized a Node.js project with npm
- Installed `express`, `mysql2`, and `dotenv`
- Created `server.js` as the API entry point
- Added `GET /users` to query MySQL and return JSON
- Solved the LeetCode "Valid Parentheses" challenge in PHP with an accepted submission
- Documented setup and usage for Day 04
