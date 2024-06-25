<?php 
session_start();
if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>YEAY BERHASIL</h1>
    <a href="logout.php" class="link-button">Logout</a>

</body>
</html>