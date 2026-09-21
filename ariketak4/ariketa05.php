<?php

$zenbakiak = array();

for ($i = 0; $i < 10; $i++) {
    $zenbakiak[] = rand(0, 99);
}

$txikiena = $zenbakiak[0];

for ($i = 1; $i < count($zenbakiak); $i++) {
    if ($zenbakiak[$i] < $txikiena) {
        $txikiena = $zenbakiak[$i];
    }
}

echo "Zenbakiak: ";
print_r($zenbakiak);
echo "<br>Zenbaki txikiena: " . $txikiena;

?>
