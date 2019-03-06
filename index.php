<?php
echo "hello";
$servername = "eager_austin";
$username = "root";
$password = "root";
$port=3308;

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>