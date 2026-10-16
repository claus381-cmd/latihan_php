<?php

function hitungTotalBelanja($harga_barang, $jumlah_pembelian, $persentase_diskon = 0) {
    $harga_kotor = $harga_barang * $jumlah_pembelian;

    $jumlah_diskon = $harga_barang * ($persentase_diskon / 100);

    $total_bersih = $harga_kotor - $jumlah_diskon;
    return $total_bersih;
};


echo "Total yang harus dibayar: Rp " . hitungTotalBelanja(50000, 5, 10);

?>