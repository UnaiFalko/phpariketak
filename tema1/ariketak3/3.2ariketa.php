<?php
$zenbakia = $_GET['zenbakia'];

for ($i = $zenbakia; $i >= 1; $i--) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}
?>
