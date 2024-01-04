const mysql = require('mysql2');

// Create a connection pool
const pool = mysql.createPool({
  host: 'localhost',          // Your database host
  user: 'root',               // MySQL username (default is often 'root')
  password: '',               // MySQL password (if you set one during XAMPP setup)
  database: 'rmasdb',  // Replace 'your_database' with your actual database name
  waitForConnections: true,
  connectionLimit: 10,
  queueLimit: 0
});

// Test the connection
pool.getConnection((err, connection) => {
  if (err) {
    console.error('Database connection error:', err);
  } else {
    console.log('Connected to database successfully!');
    connection.release();
  }
});

module.exports = pool;




const pool = require('./database.js');

// Now you can execute queries using the pool
pool.query('SELECT * FROM your_table', (err, results) => {
  if (err) {
    console.error('Query error:', err);
  } else {
    console.log('Query results:', results);
  }
});
