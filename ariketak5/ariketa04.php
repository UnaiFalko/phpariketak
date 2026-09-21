<?php

$produktuak = array(
    "produktu10" => "Sagarrak",
    "produktu2" => "Madariak",
    "produktu1" => "Laranjak"
);

echo "Gakoaren arabera ordenatuta:<br>";
ksort($produktuak);
foreach ($produktuak as $gakoa => $balioa) {
    echo $gakoa . ": " . $balioa . "<br>";
}

echo "<br>Balioaren arabera ordenatuta:<br>";
natsort($produktuak);
foreach ($produktuak as $gakoa => $balioa) {
    echo $gakoa . ": " . $balioa . "<br>";
}

?>