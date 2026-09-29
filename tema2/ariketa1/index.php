<?php
require_once __DIR__ . '/Triangelua.php';

$irudia = new IrudiGeometrikoa();
$irudia->setIzena('A');
$irudia->setKolorea('urdina');

$triangelua = new Triangelua();
$triangelua->setIzena('B');
$triangelua->setKolorea('berdea');
$triangelua->setOinarria(3);
$triangelua->setAltuera(5);

echo 'Irudi geometrikoa<br>';
$irudia->idatzi();

echo '<br>Triangelua<br>';
$triangelua->idatzi();
$triangelua->areaKalkulatu();
