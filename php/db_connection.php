<?php
$host = "localhost";
$username = "root";
$password = "ram"; 
$database = "mini_project_tourism";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>