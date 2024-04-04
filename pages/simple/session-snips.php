<?php 
// Set Session ID by User Level Lookup in MySQL Database
$username = $_SESSION['username']; // Assuming username is stored in the session
$query = "SELECT userlevel FROM users WHERE username = '$username'";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
$userlevel = $row['userlevel'];

// Use the $userlevel to set the session ID or perform further actions
?> 


<?php    #---------------------------------------------------------------------##; ?> 

<?php

// Start the session
session_start();

// Assuming $username is the username retrieved from the database
$username = "example_username";

// Assuming $userlevel is the user level retrieved from the database
$userlevel = "admin";

// Set the session variables
$_SESSION['user_id'] = session_id();
$_SESSION['username'] = $username;
$_SESSION['userlevel'] = $userlevel;

?>

<?php   #---------------------------------------------------------------------##; ?> 

<?php 
// Set sessionID to userlevel by username in MySQL Database
$query = "UPDATE users SET sessionID = userlevel WHERE username = 'username'";
mysqli_query($connection, $query);

?> 
