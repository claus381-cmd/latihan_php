<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_latihan";



$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn->connect_error) {
    die("gagal konek: " . $conn->connect_error);
}

echo "Berhasil konek";



?>