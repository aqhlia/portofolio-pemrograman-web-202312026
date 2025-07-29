<?php
$ukuran_baju = "M"; // Ubah nilai ini untuk mencoba ukuran lain

switch ($ukuran_baju) {
    case "S":
        echo "Ukuran Small - S";
        break;
    case "M":
        echo "Ukuran Medium - M";
        break;
    case "L":
        echo "Ukuran Large - L";
        break;
    case "XL":
        echo "Ukuran Extra Large - XL";
        break;
    default:
        echo "Ukuran tidak dikenal. Silakan pilih S, M, L, atau XL.";
}
?>
