<?php

$egunak = array(
    "Astelehena" => 1,
    "Asteartea" => 2,
    "Asteazkena" => 3,
    "Osteguna" => 4,
    "Ostirala" => 5,
    "Larunbata" => 6,
    "Igandea" => 7
);

$batura = 0;

foreach ($egunak as $eguna => $balioa) {
    echo $eguna . ": " . $balioa . "<br>";
    $batura += $balioa;
}

$batezbestekoa = $batura / count($egunak);

echo "Batura: " . $batura . "<br>";
echo "Batezbestekoa: " . $batezbestekoa;

?>