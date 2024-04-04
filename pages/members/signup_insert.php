<?php
$servername = "localhost";
$username = "root";
$password = "vbsinc1";
$dbname = "vbstscale_conduit";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$phonenumber = $_POST['phonenumber'];
$lastlogin = date("Y-m-d H:i:s");
$userlevel = $_POST['userlevel'];
$sessionid = session_id();
$loggedin = 0;

$sql = "INSERT INTO members (firstname, lastname, username, email, password, phonenumber, lastlogin, userlevel, sessionid, loggedin) 
        VALUES ('$firstname', '$lastname', '$username', '$email', '$password', '$phonenumber', '$lastlogin', '$userlevel', '$sessionid', '$loggedin')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
