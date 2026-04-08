const path = require("path");
const express = require("express");
const mysql = require("mysql2/promise");
const dotenv = require("dotenv");

dotenv.config({ path: path.resolve(__dirname, "..", ".env") });

const app = express();
const port = Number(process.env.PORT) || 3000;

// Share a single connection pool across requests to keep queries efficient.
const pool = mysql.createPool({
  host: process.env.DB_HOST || "127.0.0.1",
  port: Number(process.env.DB_PORT) || 3306,
  database: process.env.DB_NAME,
  user: process.env.DB_USER,
  password: process.env.DB_PASS,
  waitForConnections: true,
  connectionLimit: 10,
});

app.get("/", (_req, res) => {
  res.json({
    message: "Day 04 API is running",
    endpoints: ["/users"],
  });
});

app.get("/users", async (_req, res) => {
  try {
    // Return the imported users in insertion order for easy inspection.
    const [rows] = await pool.query(
      "SELECT id, name, email, age, created_at FROM users ORDER BY id ASC"
    );

    res.json(rows);
  } catch (error) {
    console.error("Failed to fetch users:", error.message);
    res.status(500).json({
      error: "Failed to fetch users from the database.",
    });
  }
});

app.listen(port, () => {
  console.log(`Server running on http://localhost:${port}`);
});
