<?php
session_start();

$_SESSION['nama_user'] = $_POST['nama_pengguna'];
header("Location: dashboard.php");

?>