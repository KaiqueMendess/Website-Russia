<?php
// register.php
include 'includes/config.php';
include 'includes/functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = esc($_POST['username']);
    $password = hash_password($_POST['password']);

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if (mysqli_query($conn, $sql)) {
        header("location: login.php");
    } else {
        echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
    }
}
?>
<?php include 'includes/header.php'; ?>
<div class="container">
    <h2>Registrar</h2>
    <form action="register.php" method="post">
        <div class="form-group">
            <label>Usuário</label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Senha</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <input type="submit" class="btn btn-primary" value="Registrar">
    </form>
</div>
<?php include 'includes/footer.php'; ?>
