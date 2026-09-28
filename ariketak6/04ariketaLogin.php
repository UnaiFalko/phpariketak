<?php
$user = 'admin';
$passwordHash = password_hash('pacofi', PASSWORD_DEFAULT);
$mezua = '';

if (!isset($_POST['erabiltzailea'], $_POST['pasahitza'])) {
    $mezua = 'Formularioa bidali behar duzu.';
} elseif ($_POST['erabiltzailea'] === $user && require __DIR__ . '/04ariketaPasahitza.php') {
    $mezua = 'Login zuzena izan da.';
} else {
    $mezua = 'Erabiltzaile edo pasahitz okerra.';
}
?>
<p><?= htmlspecialchars($mezua) ?></p>