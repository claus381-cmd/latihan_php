<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_to_do_list_task";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
    die("koneksi gagal " . mysqli_connect_error());
};

echo "koneksi berhasil";

?>