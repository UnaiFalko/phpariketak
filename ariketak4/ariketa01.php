<?php

$erab1 = array("Ane", "Etxeberria", "12345678A");
$erab2 = array("Jon", "Agirre", "87654321B");

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
        <tr>
            <?php foreach ($erab1 as $datu): ?>
                <td><?php echo $datu; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr>
            <?php foreach ($erab2 as $datu): ?>
                <td><?php echo $datu; ?></td>
            <?php endforeach; ?>
        </tr>
    </table>
</body>
</html>
