<?php
session_start();
$_SESSION = array();
session_destroy();

if (isset($_COOKIE['user_id']) && isset($_COOKIE['username'])) {
    setcookie("user_id", "", time() - 3600, "/");
    setcookie("username", "", time() - 3600, "/");
}

header("location: login.php");
exit();
?>
