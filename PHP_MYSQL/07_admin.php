<?php
session_start();
if (!isset($_SESSION['tuvastamine'])) {
    header('Location: 07_login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="et">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
    <link rel="stylesheet" href="includes/style.css">
</head>

<body>
<h1>Salajane info</h1>
<p>Salainfo</p>
<form action="07_logout.php" method="post">
    <input type="submit" value="Logi välja" name="logout">
</form>
</body>
</html>