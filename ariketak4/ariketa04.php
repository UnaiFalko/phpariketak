<?php

$zenbakiak = array(12, 45, 7, 89, 34, 21, 66, 3, 50, 18);
$handiena = $zenbakiak[0];

for ($i = 1; $i < count($zenbakiak); $i++) {
    if ($zenbakiak[$i] > $handiena) {
        $handiena = $zenbakiak[$i];
    }
}

echo "Zenbaki handiena: " . $handiena;

?>
