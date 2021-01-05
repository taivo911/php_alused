<?php
require_once "includes/config.php";
session_start();
if (isset($_SESSION['auth'])) {
    header('Location: 07_admin.php');
    exit();
}
if (!empty($_POST['login']) && !empty($_POST['pass'])) {
    $login = htmlspecialchars(trim($_POST['login']));
    $pass = htmlspecialchars(trim($_POST['pass']));
    $attempt = $conn->query("SELECT password FROM kasutajad WHERE username = '$login'");
    if (!($attempt = $attempt->fetch_assoc())) {
        echo 'Kasutaja või parool on vale.';
    } else {
        if (password_verify($pass, $attempt['password'])) {
            $_SESSION['auth'] = 'set';
            header('Location: 07_admin.php');
            exit();
        } else {
            echo 'Kasutaja või parool on vale.';
        }
    }
}
?>
<h1>Login</h1>
<form action="" method="post">
    Login: <input type="text" name="login"><br>
    Password: <input type="password" name="pass"><br>
    <input type="submit" value="Logi sisse"><br>
</form>
<form action="07_register.php" method="post">
    <input type="submit" value="Registreeri">
</form>