<?php

$zenbakiak = array();

for ($i = 0; $i < 10; $i++) {
    $zenbakiak[] = rand(1, 200);
}

echo "Arraya print_r erabiliz:<br>";
echo "<pre>";
print_r($zenbakiak);
echo "</pre>";

echo "Arraya begizta erabiliz:<br>";
for ($i = 0; $i < count($zenbakiak); $i++) {
    echo $zenbakiak[$i] . " ";
}

echo "<br><br>Arraya alderantziz:<br>";
for ($i = count($zenbakiak) - 1; $i >= 0; $i--) {
    echo $zenbakiak[$i] . " ";
}

?>
