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
$stmt = $conn->prepare("INSERT INTO users (name, email, phone) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $phone);

// Set parameters and execute
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$stmt->execute();

// Close statement and connection
$stmt->close();
$conn->close();

// Redirect to index page
header("Location: index.php");
exit();
?>
