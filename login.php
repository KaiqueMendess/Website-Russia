<?php
include 'includes/config.php';
include 'includes/functions.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = esc($_POST['username']);
    $password = $_POST['password'];
    $remember_me = isset($_POST['remember_me']);

    $sql = "SELECT id, password FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (verify_password($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $username;

            if ($remember_me) {
                setcookie("user_id", $row['id'], time() + (86400 * 30), "/");
                setcookie("username", $username, time() + (86400 * 30), "/");
            }

            header("location: index.php");
            exit();
        } else {
            $error = "Senha inválida.";
        }
    } else {
        $error = "Nenhum usuário encontrado com esse nome.";
    }
}
?>
<?php include 'includes/header.php'; ?>
<div class="container">
    <h2>Login</h2>
    <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php endif; ?>
    <form action="login.php" method="post">
        <div class="form-group">
            <label>Usuário</label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Senha</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" name="remember_me" class="form-check-input" id="remember_me">
            <label class="form-check-label" for="remember_me">Lembrar de mim</label>
        </div>
        <input type="submit" class="btn btn-primary" value="Login">
    </form>
</div>
<?php include 'includes/footer.php'; ?>
