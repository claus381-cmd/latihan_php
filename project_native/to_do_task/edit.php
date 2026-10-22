<?php
include 'koneksi.php';

// Proses saat tombol update diklik
if (isset($_POST['tombol_update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $catatan = $_POST['catatan'];

    $sql_update = "UPDATE task SET nama = ?, catatan = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql_update);
    mysqli_stmt_bind_param($stmt, "ssi", $nama, $catatan, $id);

    if (mysqli_stmt_execute($stmt)) {
        echo "<p style='color: green;'>Data berhasil diubah! <a href='index.php'>Kembali ke Catatan</a></p>";
    } else {
        echo "<p style='color: red;'>Gagal mengubah data: " . mysqli_stmt_error($stmt) . "</p>";
    }
}

// Ambil data lama berdasarkan ID dari URL untuk ditampilkan di form
$id_edit = $_GET['id'] ?? 0;
$query = "SELECT * FROM task WHERE id = ?";
$stmt_get = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt_get, "i", $id_edit);
mysqli_stmt_execute($stmt_get);
$result = mysqli_stmt_get_result($stmt_get);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Catatan</title>
</head>
<body>
    <form action="" method="POST">
        <!-- Input hidden untuk menyimpan ID agar sistem tahu data mana yang di-update -->
        <input type="hidden" name="id" value="<?= $data['id'] ?? ''; ?>">

        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?= htmlspecialchars($data['nama'] ?? ''); ?>"><br><br>

        <label>Catatan:</label><br>
        <input type="text" name="catatan" value="<?= htmlspecialchars($data['catatan'] ?? ''); ?>"><br><br>

        <button type="submit" name="tombol_update">Simpan Perubahan</button>
    </form>
</body>
</html>