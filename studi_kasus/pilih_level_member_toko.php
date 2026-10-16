<?php

$level_member = "Silver";

switch($level_member) {
    case "Gold":
        echo "Selamat! Anda mendapat diskon 20%!";
        break;

    case "Silver":
        echo "Selamat! Anda mendapat diskon 10%!";
        break;
    default:
        "Maaf, level member tidak valid.";
        break;
}





?>