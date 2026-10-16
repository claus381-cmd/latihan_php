<?php

$user = [
    "nama" => "Budi",
    "email" => "budi@gmail.com",
    "role" => "Admin",
];
unset($user["email"]);

$buah = ["Apel", "Pisang", "Jeruk"];
unset($buah[1]);

$angka = [10, 20, 30, 40, 50];
unset($angka[1], $angka[2]);

$hewan = [
    "Kucing",
    "Anjing",
    "Kelinci",
    "Burung"
];
array_splice($hewan, 1, 2);

$laptop = ["Asus", "Lenovo", "Dell"];
array_pop($laptop);

$antrean = ["Antrian 1", "Antrian 2", "Antrian 3"];
array_shift($antrean);

$warna = ["Merah", "Hijau", "Biru", "Kuning"];
$warna = array_diff($warna, ["Hijau", "Kuning"]);

$cars = [
    "brand" => "Toyota",
    "model" => "Yaris",
    "year" => 2020,
    "color" => "Merah",
];
$cars = array_flip(["year", "color"]);

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
        <?php foreach ($user as $label => $isi) : ?>
            <li><?= $label ?> : <?= $isi ?></li>
        <?php endforeach; ?>
    </ul> <br>

    <ul>
        <?php foreach ($buah as $label => $isi) : ?>
            <li><?= $label ?>: <?= $isi ?></li>
        <?php endforeach; ?>
    </ul> <br>

    <ul>
        <?php foreach ($angka as $label => $isi) : ?>
            <li><?= $label ?> : <?= $isi ?></li>
        <?php endforeach; ?>
    </ul>

    <ul>
        <?php foreach ($hewan as $jenis => $nama) : ?>
            <li><?= $jenis ?> : <?= $nama ?></li>
        <?php endforeach; ?>
    </ul>

    <ul>
        <?php foreach ($laptop as $nama => $merek) : ?>
            <li><?= $nama ?> : <?= $merek ?></li>
        <?php endforeach; ?>
    </ul>

    <ul>
        <?php foreach ($antrean as $table => $angka) : ?>
            <li><?= $table ?> : <?= $angka ?></li>
        <?php endforeach; ?>
    </ul>

    <ul>
        <?php foreach ($warna as $nama => $isi) : ?>
            <li><?= $nama ?> : <?= $isi ?></li>
        <?php endforeach; ?>
    </ul>

    <ul>
        <?php foreach ($cars as $katagori => $isi) : ?>
            <li><?= $katagori ?> : <?= $isi ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>