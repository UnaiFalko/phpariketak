<?php
$kalifikazioa1 = 6;
$kalifikazioa2 = 7.5;

$batazbestekoa = ($kalifikazioa1 + $kalifikazioa2) / 2;

if ($batazbestekoa >= 5) {
    echo "Bataz bestekoa: " . $batazbestekoa . " - Gainditua";
} else {
    echo "Bataz bestekoa: " . $batazbestekoa . " - Gainditu gabea";
}
?>
