<?php
$kalimat = "STITEK Bontang adalah kampus IT terbaik";

// Menampilkan panjang kalimat
echo "Panjang kalimat: " . strlen($kalimat) . "<br>";

// Menampilkan jumlah kata
echo "Jumlah kata: " . str_word_count($kalimat) . "<br>";

// Mengganti kata 'terbaik' menjadi 'favorit'
echo "Mengganti kata: "  . strtoupper($kalimat) . "<br>";
?>
