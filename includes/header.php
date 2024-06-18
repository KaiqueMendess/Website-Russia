<!-- includes/header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Russia - Seja Bem Vindo</title>
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Russia</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="about.php">Sobre</a></li>
            <li class="nav-item"><a class="nav-link" href="comment.php">Comentários</a></li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <?php if (is_logged_in()): ?>
                <li class="nav-item"><a class="nav-link" href="admin/index.php">Admin</a></li>
                <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
            <?php else: ?>
                <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="register.php">Registrar</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
