<?php
$servername = "php24-db-1"; // Replace with your MySQL server hostname
$username = "crudeApp";     // Replace with your MySQL username
$password = "Kalpi@1113";     // Replace with your MySQL password
$dbname = "crudeApp";       // Replace with the name of your MySQL database

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>