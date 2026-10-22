<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql_delete = "DELETE FROM tamu WHERE id = $id";

$result = mysqli_query($conn, $sql_delete);
header("Location: tampil_tamu.php");


?>