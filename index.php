<?php

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "example";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare SQL statement
$sql = "SELECT id, name, email, phone FROM users";
$result = $conn->query($sql);