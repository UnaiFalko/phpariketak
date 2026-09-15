<?php
$alderdiBikoitiak = true; 

if ($alderdiBikoitiak) {
    $zenbaki = rand(1, 99);
    echo "Zenbaki bikoitiak 1etik $zenbaki arte:<br>";

    for ($i = 1; $i < $zenbaki; $i++) {
        if ($i % 2 == 0) {
            echo $i . "<br>";
        }
    }
} else {
    echo "Zenbaki bakoitiak:<br>";

    for ($i = 1; $i < 100; $i++) {
        if ($i % 2 != 0) {
            echo $i . "<br>";
        }
    }
}
?>
