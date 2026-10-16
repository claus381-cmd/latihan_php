<?php

$nilai = [
    ["Budi", 58],
    ["Sita", 75],
    ["Lala", 82],
    ["Kila", 95],
    ["Pita", 90]
];

function hitungRataRata($nilai) {
    $total = 0;

    foreach($nilai as $siswa) {
        $total += $siswa[1];
    };

    return $total / count($nilai);
};


?>