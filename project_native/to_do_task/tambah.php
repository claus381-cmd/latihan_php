<?php
include 'koneksi.php';

if(isset($_POST['tombol_kirim'])) {
    $catatan = $_POST['catatan'];
    $nama = $_POST['nama'];


$SQL = "INSERT INTO task (nama, catatan) VALUE (?, ?)";
$stmt = mysqli_prepare($conn, $SQL);
  mysqli_stmt_bind_param($stmt, "ss", $nama, $catatan);

  if(mysqli_stmt_execute($stmt)) {
    echo "Catatan berhasil ditambahkan! <a href='index.php'>Lihat Catatan</a>";
  } else {
    echo "Gagal: " . mysqli_stmt_error($stmt);
  }

};



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="nama"><br><br>
    <input type="text" name="catatan" placeholder="Tulis Catatan......"><br><br>
    <button type="submit" name="tombol_kirim">Kirim</button>
    </form>
</body>
</html>