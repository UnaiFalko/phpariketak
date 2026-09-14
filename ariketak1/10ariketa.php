<?php
$irteeraData = "2024-09-14 15:30";
$oragunea = date("Y-m-d H:i");

$denbora = strtotime($irteeraData) - strtotime($oragunea);

if ($denbora > 0) {
    $ordua = floor($denbora / 3600);
    $minutua = floor(($denbora % 3600) / 60);
    echo "Hegazkina hartzekoan " . $ordua . " ordu eta " . $minutua . " minutu falta dira";
} else {
    echo "Hegazkina igaro da dagoeneko";
}
?>
