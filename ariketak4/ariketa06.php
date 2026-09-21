<?php

$zenbakiak = array();

for ($i = 0; $i < 10; $i++) {
    $zenbakiak[] = rand(0, 99);
}

$batuketa = 0;

foreach ($zenbakiak as $zenbakia) {
    $batuketa += $zenbakia;
}

$batezbestekoa = $batuketa / count($zenbakiak);

echo "Zenbakiak: ";
print_r($zenbakiak);
echo "<br>Batezbestekoa: " . $batezbestekoa;

?>
