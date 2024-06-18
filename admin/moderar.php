<?php
// admin/moderar.php
include '../includes/config.php';

if (isset($_GET['id']) && isset($_GET['action'])) {
    $id = esc($_GET['id']);
    $action = $_GET['action'] === 'approve' ? 1 : 0;

    $sql = "UPDATE comments SET approved = $action WHERE id = $id";
    
    if (mysqli_query($conn, $sql)) {
        header("location: index.php");
    } else {
        echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
    }
}
?>