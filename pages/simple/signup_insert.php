<?php

// Database connection
require_once "config.php";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form data
$username = $_POST['username'];
$password = $_POST['password'];
$userlevel = $_POST['userlevel'];

// SQL to insert data into MySQL
$sql = "INSERT INTO users (username, password, userlevel) VALUES ('$username', '$password', '$userlevel')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
