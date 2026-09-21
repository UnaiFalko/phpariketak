<?php
$a = 15;
$b = 7;
$c = 23;

echo "Jatorrizko balioak: " . $a . ", " . $b . ", " . $c;

if ($a < $b && $a < $c) {
    $txikia = $a;
} elseif ($b < $c) {
    $txikia = $b;
} else {
    $txikia = $c;
}

if ($a > $b && $a > $c) {
    $handia = $a;
} elseif ($b > $c) {
    $handia = $b;
} else {
    $handia = $c;
}

$ertaina = $a + $b + $c - $txikia - $handia;

echo "Ordena gorakorra: " . $txikia . ", " . $ertaina . ", " . $handia;
echo "Ordena beherakorra: " . $handia . ", " . $ertaina . ", " . $txikia;
?>
