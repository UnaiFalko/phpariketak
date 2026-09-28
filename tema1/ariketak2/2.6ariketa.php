<?php
$lehenZenb = 2;
$azkenZenb = 5;

for ($i = $lehenZenb; $i <= $azkenZenb; $i++) {
    echo $i;
    if ($i < $azkenZenb) {
        echo "+";
    }
}
?>
