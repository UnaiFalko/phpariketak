<?php
$kalifikazioa = 7.5;

if ($kalifikazioa >= 1 && $kalifikazioa <= 4.9) {
    echo "Ez gainditua";
} elseif ($kalifikazioa >= 5 && $kalifikazioa <= 5.9) {
    echo "Nahiko";
} elseif ($kalifikazioa >= 6 && $kalifikazioa <= 6.9) {
    echo "Ondo";
} elseif ($kalifikazioa >= 7 && $kalifikazioa <= 8.9) {
    echo "Oso ondo";
} elseif ($kalifikazioa >= 9 && $kalifikazioa <= 10) {
    echo "Bikain";
} else {
    echo "AKATSA";
}
?>
