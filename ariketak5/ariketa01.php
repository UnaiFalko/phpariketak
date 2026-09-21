<?php

$pertsonak = array(
	array("izena" => "Ane", "abizena" => "Etxeberria", "NANa" => "12345678A"),
	array("izena" => "Jon", "abizena" => "Agirre", "NANa" => "87654321B")
);

?>
<!DOCTYPE html>
<html lang="eu">
<head>
	<meta charset="UTF-8">
	<title>Ariketa 01</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>Izena</th>
			<th>Abizena</th>
			<th>NANa</th>
		</tr>
		<?php foreach ($pertsonak as $pertsona): ?>
			<tr>
				<td><?php echo htmlspecialchars($pertsona["izena"]); ?></td>
				<td><?php echo htmlspecialchars($pertsona["abizena"]); ?></td>
				<td><?php echo htmlspecialchars($pertsona["NANa"]); ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>
