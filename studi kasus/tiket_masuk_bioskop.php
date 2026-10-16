<?php

define("HARGA_NORMAL", 40000);
define("HARGA_DISKON", 10000);

$umur = 20;
$member = true;

if ($umur >= 17 && $member == true) {
    $total_   harga = HARGA_NORMAL - HARGA_DISKON;
    echo "Silahkan Masuk Anda Mendapatkan Dikon Member! <br>";
    echo "Total harga tiket:" . $total_harga;
}elseif($umur >= 17 && $member == false) {
    $total_harga = HARGA_NORMAL;
    echo "Silahkan masuk dengan harga normal";
    echo "Total Tiket:" . $total_harga;
}else {
    echo "Maaf usia belum cukup untuk menonton film ini!!!";
}



?>