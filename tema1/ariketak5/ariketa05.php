<?php

$zenbakiak = array();
$maiztasunak = array_fill(0, 50, 0);

for ($i = 0; $i < 50; $i++) {
    $zenbakia = rand(0, 49);
    $zenbakiak[] = $zenbakia;
    $maiztasunak[$zenbakia]++;
}

echo "Sortutako zenbakiak: " . implode(", ", $zenbakiak) . "<br><br>";

for ($i = 0; $i < count($maiztasunak); $i++) {
    echo $i . ": " . $maiztasunak[$i] . " aldiz<br>";
}

?>