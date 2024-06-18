<?php
session_start();
include '../includes/config.php';
include '../includes/functions.php';

define('COOKIE_EXPIRATION', 86400 * 30); // 30 dias

function renew_cookies() {
    if (isset($_COOKIE['user_id']) && isset($_COOKIE['username'])) {
        setcookie("user_id", $_COOKIE['user_id'], time() + COOKIE_EXPIRATION, "/");
        setcookie("username", $_COOKIE['username'], time() + COOKIE_EXPIRATION, "/");
    }
}

if (!isset($_SESSION['user_id'])) {
    if (isset($_COOKIE['user_id']) && isset($_COOKIE['username'])) {
        $_SESSION['user_id'] = $_COOKIE['user_id'];
        $_SESSION['username'] = $_COOKIE['username'];
        renew_cookies();
    } else {
        header("location: ../login.php");
        exit();
    }
} else {
    renew_cookies();
}

include '../includes/header.php';

$sql = "SELECT c.id, u.username, c.comment, c.approved FROM comments c JOIN users u ON c.user_id = u.id";
$result = mysqli_query($conn, $sql);
?>
<div class="container">
    <h2>Comentários</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuário</th>
                <th>Comentário</th>
                <th>Aprovado</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['comment']; ?></td>
                    <td><?php echo $row['approved'] ? 'Sim' : 'Não'; ?></td>
                    <td>
                        <a href="moderar.php?id=<?php echo $row['id']; ?>&action=approve" class="btn btn-success">Aprovar</a>
                        <a href="moderar.php?id=<?php echo $row['id']; ?>&action=reject" class="btn btn-danger">Reprovar</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
<?php include '../includes/footer.php'; ?>
