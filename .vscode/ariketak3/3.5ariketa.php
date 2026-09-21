<?php
$lerroKopurua = $_GET['lerroKopurua'];

for ($i = 1; $i <= $lerroKopurua; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "o";
    }
    echo "<br>";
}
?>
