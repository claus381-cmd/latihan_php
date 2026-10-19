<?php
session_start();

echo "Selamat datang kembali, " . $_SESSION['nama_user'] . "!";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br>
    <a href="logout.php">Keluar / Logout</a>
</body>
</html>