<?php
function erakutsi($izena, $balioa) {
    if (empty($balioa)) {
        echo "<p style='color:red'>$izena ez da sartu.</p>";
    } else {
        echo "$izena: <b>" . htmlspecialchars($balioa) . "</b><br>";
    }
}

erakutsi('Izena', $_POST['izena'] ?? '');
erakutsi('Abizenak', $_POST['abizenak'] ?? '');
erakutsi('Adina', $_POST['adina'] ?? '');
erakutsi('Pisua', $_POST['pisua'] ?? '');
erakutsi('Sexua', $_POST['sexua'] ?? '');
erakutsi('Egoera zibila', $_POST['egoera'] ?? '');

if (empty($_POST['afizioak'])) {
    echo "<p style='color:red'>Ez duzu afiziorik aukeratu.</p>";
} else {
    echo 'Afizioak: <b>' . htmlspecialchars(implode(', ', $_POST['afizioak'])) . '</b>';
}
?>