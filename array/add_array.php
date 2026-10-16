<?php

$buah = ["Apel", "Pisang"];
$buah[] = "Jeruk";

$user = [
    "nama" => "Budi",
];
$user["email"] = "budi@gmail.com";

$angka = [1, 2];
array_push($angka, 3, 4, 5);

$produk = [
    "nama" => "Kemeja",
    "harga" => 150000,
];
$detail_tambahan = [
    "ukuran" => "L",
    "warna" => "Biru",
];
$produk = array_merge($produk, $detail_tambahan);


$peserta = [
    0 => "Andi",
    1 => "Siti",
];
$peserta[5]= "Budi";


$biodata = [
    "Rian",
    25,
    true,
    ["Koding", "Musil"]
]; 
print_r($biodata);


$makanan = [ 
    "Nasi Goreng", "Mie Ayam"
];
$menu_lengkap = [
    "Es teh",
    ...$makanan,
    "Kopi"
];
print_r($makanan)

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
        <?php foreach($buah as $label => $isi ) : ?>
            <li><?= $label ?> : <?= $isi ?></li>
        <?php endforeach; ?>
    </ul> <br>

    <ul>
        <?php foreach($user as $name => $isi) : ?>
        <li><?= $name ?> : <?= $isi ?></li>
        <?php endforeach; ?>
    </ul> <br>

    <ul>
        <?php foreach($angka as $nomor => $int) : ?>
        <li><?= $nomor ?> : <?= $int ?></li>
        <?php endforeach; ?>
    </ul> <br>
    
    <ul>
        <?php foreach($produk as $tema => $jumlah) :?>
        <li><?= $tema ?> : <?= $jumlah ?></li>
        <?php endforeach; ?>
    </ul> <br>
    
    <ul>
        <?php foreach($peserta as $label => $isi) : ?>
            <li><?= $label ?> : <?= $isi ?></li>
        <?php endforeach; ?>
    </ul>

    <ul>
        <?php foreach($makanan as $menu => $isi) : ?>
            <li><?= $menu ?> : <?= $isi ?></li>
        <?php endforeach; ?>
    </ul>

    
    
</body>
</html>