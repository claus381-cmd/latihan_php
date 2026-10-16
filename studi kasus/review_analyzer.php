<?php

$ulasan = "Produk ini sangat bagus dan pengirimannya cepat!";
$username = "   BudiSantoso99   ";
$tags = "elektronik,laptop,gaming,promo";

echo strlen($ulasan) . "\n";
echo str_word_count($ulasan) . "\n";
echo strpos($ulasan , "bagus" ) . "\n";
echo str_replace("bagus", "mewah", $ulasan) . "\n";
echo strrev($ulasan) . "\n";
echo trim($username) . substr($username, 0, 3) . "\n";
echo strtolower($username) . "\n";
$awal = explode(",", $tags);
print_r($awal) . "\n";
echo implode(",", $awal);
?>