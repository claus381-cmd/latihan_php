<?php

define("NAMA_TOKO", "Supermarket Maju Bersama");
define("MINIMAL_DISKON", 100000);

$keranjang = [
    ["nama" => "Minyak Goreng", "harga" => 25000],
    ["nama" => "Beras 5kg", "harga" => 70000]
];

array_push($keranjang, [
    "nama"  => "GulaPasir",
    "harga" => 15000,
]);

for($i = 0; $i < count($keranjang); $i++) {
    sleep(1);
    echo "Nama: " . $keranjang[$i]["nama"] . "<br>";
    echo "Harga: " . $keranjang[$i]["harga"] . "<br>";
    echo "<hr>";
};

if($keranjang[0]["harga"] >= MINIMAL_DISKON) {
    echo $keranjang[0]["nama"] . "selamat beserta total harga akhir setelah dipotong diskon.";
}else{
    echo "selamat membeli";
};



?>