<?php
// db.inc.php

// Database connection credentials
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'car_dealership';

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
