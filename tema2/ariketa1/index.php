<?php
require_once __DIR__ . '/Triangelua.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$irudia = new IrudiGeometrikoa();
	$irudia->setIzena($_POST['irudiaIzena']);
	$irudia->setKolorea($_POST['irudiaKolorea']);

	echo '<h2>Irudi geometrikoa</h2>';
	$irudia->idatzi();

	$triangelua = new Triangelua();
	$triangelua->setIzena($_POST['triangeluaIzena']);
	$triangelua->setKolorea($_POST['triangeluaKolorea']);
	$triangelua->setAltuera(5);
	$triangelua->setOinarria(3);

	echo '<h2>Triangelua</h2>';
	$triangelua->idatzi();
	$triangelua->areaKalkulatu();
}
?>
<form method="post">
	<h2>Irudi geometrikoa</h2>
	<label>Izena: <input type="text" name="irudiaIzena" required value="<?= htmlspecialchars($_POST['irudiaIzena'] ?? 'A', ENT_QUOTES, 'UTF-8') ?>"></label><br>
	<label>Kolorea: <input type="text" name="irudiaKolorea" required value="<?= htmlspecialchars($_POST['irudiaKolorea'] ?? 'urdina', ENT_QUOTES, 'UTF-8') ?>"></label><br>

	<h2>Triangelua</h2>
	<label>Izena: <input type="text" name="triangeluaIzena" required value="<?= htmlspecialchars($_POST['triangeluaIzena'] ?? 'B', ENT_QUOTES, 'UTF-8') ?>"></label><br>
	<label>Kolorea: <input type="text" name="triangeluaKolorea" required value="<?= htmlspecialchars($_POST['triangeluaKolorea'] ?? 'berdea', ENT_QUOTES, 'UTF-8') ?>"></label><br>

	<button type="submit">Bidali</button>
</form>
