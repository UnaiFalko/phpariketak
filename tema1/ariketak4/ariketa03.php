<?php

$produktuak = array("Botak", "Kirol-oinetakoak", "Sandaliak", "Zapatilak", "Mendiko oinetakoak");
$prezioak = array(60, 45, 25, 35, 80);
$beherapena = 20;

for ($i = 0; $i < count($produktuak); $i++) {
    $prezioZaharra = $prezioak[$i];
    $prezioak[$i] = $prezioZaharra - ($prezioZaharra * $beherapena / 100);

    echo $produktuak[$i] . ": " . $prezioZaharra . " euro -> " . $prezioak[$i] . " euro<br>";
}

?>
