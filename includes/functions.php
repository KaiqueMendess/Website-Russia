<?php
// includes/functions.php

function esc($data) {
    global $conn;
    return mysqli_real_escape_string($conn, $data);
}

function hash_password($password) {
    return password_hash($password, PASSWORD_BCRYPT);
}

function verify_password($password, $hashed_password) {
    return password_verify($password, $hashed_password);
}

function is_logged_in() {
    return isset($_SESSION['user_id']);
}
?>
