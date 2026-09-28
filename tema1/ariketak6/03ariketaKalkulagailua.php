<?php
if (!isset($_POST['zenbakia1'], $_POST['zenbakia2'], $_POST['eragiketa'])) {
    echo 'Formularioa bete behar duzu.';
    exit;
}

$a = $_POST['zenbakia1'];
$b = $_POST['zenbakia2'];
$eragiketa = $_POST['eragiketa'];

if (filter_var($a, FILTER_VALIDATE_INT) === false || filter_var($b, FILTER_VALIDATE_INT) === false) {
    echo 'Zenbaki osoak sartu behar dituzu.';
} elseif ($eragiketa == 'zatitu' && $b == 0) {
    echo 'Ezin da zeroz zatitu.';
} else {
    if ($eragiketa == 'batu') echo $a + $b;
    if ($eragiketa == 'kendu') echo $a - $b;
    if ($eragiketa == 'biderkatu') echo $a * $b;
    if ($eragiketa == 'zatitu') echo $a / $b;
}
?>