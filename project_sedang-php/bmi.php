<?php

$berat = "100";
$tinggi = "1.85";

function hitungBMI($berat, $tinggi) {
    return $berat / ($tinggi * $tinggi);
};

$hasilBMI = hitungBMI($berat, $tinggi);

$bmiBulat = round(hitungBMI($hasilBMI, 1));

if($bmiBulat < 18.5) {
    $kategori = "Kurus";
} elseif($bmiBulat >= 18.5 && $bmiBulat <= 25.9) {
    $kategori = "Sedang";
} elseif($bmiBulat >= 25 && $bmiBulat <= 29.9) {
    $kategori = "Gemuk";
} else {
    $kategori = "Obesitas";
};

echo "BMI Anda adalah $bmiBulat termasuk dalam kategori $kategori.";

?>