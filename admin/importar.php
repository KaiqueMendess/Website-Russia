<?php
// admin/importar.php
include '../includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $json = file_get_contents($_FILES['jsonFile']['tmp_name']);
    $comments = json_decode($json, true);

    foreach ($comments as $comment) {
        $user_id = esc($comment['user_id']);
        $text = esc($comment['comment']);
        $sql = "INSERT INTO comments (user_id, comment) VALUES ('$user_id', '$text')";

        if (!mysqli_query($conn, $sql)) {
            echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
        }
    }

    header("location: index.php");
}
?>
<?php include '../includes/header.php'; ?>
<div class="container">
    <h2>Importar Comentários</h2>
    <form action="importar.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Arquivo JSON</label>
            <input type="file" name="jsonFile" class="form-control" required>
        </div>
        <input type="submit" class="btn btn-primary" value="Importar">
    </form>
</div>
<?php include '../includes/footer.php'; ?>
