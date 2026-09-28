<?php
$lerroKopurua = $_GET['lerroKopurua'];

for ($i = 1; $i <= $lerroKopurua; $i++) {
    echo str_repeat("o", $i) . "<br>";
}
?>
