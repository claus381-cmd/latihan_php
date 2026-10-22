<?php
include 'koneksi.php';

// 1. Cek apakah ada 'id' di URL dan pastikan tidak kosong
if (isset($_GET['id']) && $_GET['id'] != "") {
    $id = $_GET['id'];

    // 2. Ambil data lama berdasarkan id tersebut
    $sql = "SELECT * FROM tamu WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
} else {
    // Jika tidak ada ID, hentikan program dan tampilkan pesan
    echo "Akses ditolak! ID tamu tidak ditemukan. <a href='tampil_tamu.php'>Kembali ke Daftar Tamu</a>";
    exit; // Perintah ini menghentikan kode agar baris bawahnya tidak error
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Tamu</title>
</head>
<body>

    <h3>Form Edit Nama Tamu</h3>

    <!-- 3. Form HTML dengan value data lama -->
    <form action="" method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama_baru" value="<?php echo $row['nama']; ?>">
        <button type="submit" name="submit_update">Simpan Perubahan</button>
    </form>

    <?php
    // 4. Proses SQL UPDATE ketika tombol diklik
    if (isset($_POST['submit_update'])) {
        $nama_baru = $_POST['nama_baru'];

        // Perintah SQL Update
        $sql_update = "UPDATE tamu SET nama = '$nama_baru' WHERE id = $id";

        if (mysqli_query($conn, $sql_update)) {
            echo "<p style='color: green;'>Data berhasil diubah! <a href='tampil_tamu.php'>Kembali ke Daftar Tamu</a></p>";
        } else {
            echo "<p style='co lor: red;'>Gagal mengubah data: " . mysqli_error($conn) . "</p>";
        }
    }
    ?>

</body>
</html>