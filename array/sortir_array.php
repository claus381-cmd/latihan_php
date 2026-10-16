<?php

$nama = [
    "Zack",
    "Andi",
    "Rudi",
    "Budi"
];
sort($nama);

$skor = [
    75,
    90,
    85,
    100
];
rsort($skor);

$harga_barang = [ 
    "Buku" => 5000,
    "Pensil" => 2000,
    "Tas" => 15000,
    "Penghapus" => 100
];
asort($harga_barang);

$kamus = [
    "Zebra" => "Hewan belang",
    "Apel" => "Buah merah",
    "Mangga" => "Buah manis"
];
ksort($kamus);

$voting = [
    "Kandidat A" => 150,
    "Kandidat B" => 300,
    "Kandidat C" => 120
];
arsort($voting);

$pendapat = [
    2022 => 50000,
    2024 => 70000,
    2023 => 60000
];
krsort($pendapat);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($nama as $asli => $aran) : ?>
            <li><?= $asli ?> : <?= $aran ?></li>
        <?php endforeach; ?>
    </ul>

    <ul>
        <?php foreach($skor as $angka => $hasil) : ?>
            <li><?= $angka ?> : <?= $hasil ?></li>
        <?php endforeach; ?>
    </ul>

    <ul>
        <?php foreach($harga_barang as $barang => $harga) : ?>
            <li><?= $barang ?> : <?= $harga ?></li>
        <?php endforeach; ?>
    </ul>

    <ul>
        <?php foreach($kamus as $nama => $keterangan) : ?>
            <li><?= $nama ?> : <?= $keterangan ?></li>
        <?php endforeach; ?>
    </ul>

    <ul>
        <?php foreach($voting as $table => $angka) : ?>
            <li><?= $table ?> : <?= $angka ?></li>
        <?php endforeach; ?>
    </ul>

    <ul>
        <?php foreach($pendapat as $tahun => $voting) : ?>
            <li><?= $tahun ?> : <?= $voting ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>