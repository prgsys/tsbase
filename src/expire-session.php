$username = "john_doe";
$session_id = md5($username . time());
$expire_time = time() + (4 * 60 * 60); // 4 hours from now

echo "Session ID: " . $session_id;
echo "<br>";
echo "Session will expire at: " . date('Y-m-d H:i:s', $expire_time);
