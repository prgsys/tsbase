<?php

// Create session by table users row userlevel from MySQL database
session_start();

require_once "config.php";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT userlevel FROM users WHERE username = 'example_user'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['userlevel'] = $row['userlevel'];
}

$conn->close();
?>