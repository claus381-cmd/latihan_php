<?php

$kendaraan = [
    ["Volvo", 22, 8],
    ["BMW", 15, 13],
    ["Saab", 5, 2]
];
echo " Merek: {$kendaraan[0][0]} - Stok: {$kendaraan[0][1]} - Habis:{$kendaraan[0][2]}". "<br>";

$nilai_siswa = [
    "Andi" => ["Matematika" => 90, "Fisika" => 85],
    "Budi" => ["Matematika" => 75, "Fisika => 80"]
];
echo $nilai_siswa["Andi"]["Fisika"] . "<br>";

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
        <?php for($baris = 0; $baris < 3; $baris++) {
                echo "<p><b>Baris Berapa:</b></p>";
                echo "<ul>";

            for($panjang = 0; $panjang < 3; $panjang++) {
                echo "<li>". $kendaraan[$baris][$panjang]."</li>";
                }
            "</ul>";
            }
        ?>  
    </ul>

    <ul>
        <table border="1"> 
        <?php foreach($nilai_siswa as $nama => $mapel) : ?>
            <tr>
                <td><b><?= $nama ?></b></td>
                <?php foreach($mapel as $nama_mapel => $nilai) : ?>
                    <td><?= $nama_mapel ?> : <?= $nilai ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
        </table>
        ?>
    </ul>
</body>
</html>