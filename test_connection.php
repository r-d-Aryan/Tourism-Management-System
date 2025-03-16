<?php
$servername = "localhost";
$usernameConn = "root";
$passwordConn = "ram";
$dbname = "mini_project_tourism";

// Create connection
$conn = new mysqli($servername, $usernameConn, $passwordConn, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully!";
}

$conn->close();
?>