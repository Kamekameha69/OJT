<?php
$servername = "localhost:3307"; // Change this if your database is hosted remotely
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$database = "inventory"; // Change this to your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Uncomment the line below if you want a success message (for debugging only)
// echo "Connected successfully";
?>
