<?php
// Database credentials
$dbHost = 'localhost'; // e.g., 'localhost' or as provided by 000webhost
$dbUsername = 'root'; // Your database username
$dbPassword = ''; // Your database password
$dbName = 'chat_app'; // Your database name

// Create a database connection
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

// Check the connection
if (!$conn) {
    die('Database connection failed: ' . mysqli_connect_error());
}
