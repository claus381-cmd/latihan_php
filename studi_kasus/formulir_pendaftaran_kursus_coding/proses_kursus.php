<?php

if(isset($_POST['tombol_pendaftaran'])) {
    if(empty($_POST['nama_pendaftaran']) || empty($_POST['umur_pendaftaran'])) {
        echo "Semua kolom wajib diisi!";
    }

    $nama = $_POST['nama_pendaftaran'];
    $umur = $_POST['umur_pendaftaran'];

    if($umur >= 17) {
        echo "Halo $nama, kamu masuk Kelas Lanjutan";
    } else {
        echo "Halo $nama, kamu masuk Kelas Pemula";
    }
}







?>