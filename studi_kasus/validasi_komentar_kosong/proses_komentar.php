<?php

if(isset($_POST['kirim_data'])) {
    $pesan = $_POST['pesan_komentar'];

    if(empty($pesan)) {
        echo "Pesan Komentar tidak kosong!";
    } else {
        echo "Terima kasih, komentar berhasil terkirim: " . htmlspecialchars($pesan);
    }
}

?>