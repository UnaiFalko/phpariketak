<?php
$minutuak = 5;

if ($minutuak <= 3) {
    $prezioa = 0.10;
} else {
    $gehigarria = $minutuak - 3;
    $prezioa = 0.10 + ($gehigarria * 0.05);
}

echo "Deiaren iraupena: " . $minutuak . " minututu";
echo "Ordaindu beharreko prezioa: " . $prezioa . " euro";
?>
