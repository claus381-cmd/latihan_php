<?php

$total_belanja = 75000;
$minimal_belanja = 50000;

$uang_bayar = 100000;

$cek_diskon = $total_belanja >= $minimal_belanja;

echo $total_belanja - $uang_bayar;
var_dump($cek_diskon);

?>