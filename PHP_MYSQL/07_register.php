<?php require_once "includes/config.php"; ?>
    <h1>Register</h1>
    <form action="" method="post">
        Username: <input type="text" name="login"><br>
        Password: <input type="password" name="pass"><br>
        <input type="submit" value="Registreeri"><br>
    </form>

<?php
if (!empty($_POST['login']) && !empty($_POST['pass'])) {
    $login = htmlspecialchars(trim($_POST['login']));
    $pass = htmlspecialchars(trim($_POST['pass']));
    $unique = $conn->query("SELECT id FROM kasutajad WHERE username = '$login'");
    if (mysqli_num_rows($unique) > 0) {
        echo 'Kasutajanimi on juba võetud!';
        $unique->close();
    } else if (strlen($pass) > 32) {
        echo 'Parooli maksimaalne pikkus on 32 märki';
    } else {
        $password = password_hash($pass, PASSWORD_DEFAULT);
        $query = 'INSERT INTO kasutajad (username, password) VALUES (?,?)';
        $stmt = $conn->stmt_init();
        if (!$stmt->prepare($query)) {
            $err = $stmt->error;
            echo $err;
        } else {
            $stmt->bind_param('ss', $login, $password);
            $stmt->execute();
            header('Location: 07_login.php');
        }

        if ($conn->error) {
            $err = $conn->error;
        }
    }
}
?>