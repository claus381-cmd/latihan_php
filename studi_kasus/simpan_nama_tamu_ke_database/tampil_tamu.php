<?php
include 'koneksi.php';

$SQL = "SELECT * FROM tamu ORDER BY id DESC LIMIT 5";
$result = mysqli_query($conn, $SQL);

// Perulangan while untuk mencetak nama sekaligus tombol Edit dengan ID-nya
while ($row = mysqli_fetch_assoc($result)) {
    echo "Nama: " . $row['nama'] . " | ";
    echo "<a href='edit_tamu.php?id=" . $row['id'] . "'>Edit</a><br>";
    echo "<a href='hapus_tamu.php?id=" . $row['id'] . "' onclick='return confirm(\"Yakin mau hapus?\")'>Hapus</a><br>";
}
?>