$username = "john_doe";
$expiry_time = time() + 14400; // 4 hours in seconds
setcookie("username", $username, $expiry_time);
