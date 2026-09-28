<?php

$produktuak = array("Botak", "Kirol-oinetakoak", "Sandaliak", "Zapatilak", "Mendiko oinetakoak");
$prezioak = array(60, 45, 25, 35, 80);

for ($i = 0; $i < count($produktuak); $i++) {
    echo $produktuak[$i] . ": " . $prezioak[$i] . " euro<br>";
}

?>
