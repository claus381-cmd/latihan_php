<?php
include 'koneksi.php';

if (isset($_POST['nama_tamu'])) {
    
    $name = $_POST['nama_tamu'];

    $SQL = "INSERT INTO tamu (nama) VALUES (?)";

    $stmt = mysqli_prepare($conn, $SQL);

    mysqli_stmt_bind_param($stmt, "s", $name);

    if (mysqli_stmt_execute($stmt)) {
        echo "Data berhasil disimpan ke database dengan aman!";
    } else {
        echo "Gagal: " . mysqli_stmt_error($stmt);
    }
    
} else {
    echo "Akses dilarang! Silakan isi form terlebih dahulu.";
}

?>