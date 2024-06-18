<?php
// comment.php
session_start();
include 'includes/config.php';
include 'includes/functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && is_logged_in()) {
    $user_id = $_SESSION['user_id'];
    $comment = esc($_POST['comment']);

    $sql = "INSERT INTO comments (user_id, comment) VALUES ('$user_id', '$comment')";

    if (mysqli_query($conn, $sql)) {
        header("location: comment.php");
    } else {
        echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
    }
}
?>
<?php include 'includes/header.php'; ?>
<div class="container">
    <h2>Envie um Comentário</h2>
    <form action="comment.php" method="post">
        <div class="form-group">
            <label>Comentário</label>
            <textarea name="comment" class="form-control" required></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Enviar">
    </form>
</div>
<?php include 'includes/footer.php'; ?>
