<?php
// Database connection parameters
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'soham';

// Create a new MySQLi connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
