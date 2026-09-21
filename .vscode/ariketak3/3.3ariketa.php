<?php
$zenbakia = $_GET['zenbakia'];

echo "Zenbaki bikoitiak 1etik $zenbakia arte:<br>";

for ($i = 1; $i < $zenbakia; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}
?>
