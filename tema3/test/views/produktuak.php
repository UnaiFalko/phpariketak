<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produktuak</title>
</head>
<body>
    <main>
        <h1>Produktuak</h1>
        <ul>
            <?php foreach ($produktuak as $izena): ?>
                <li><?= htmlspecialchars($izena, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></li>
            <?php endforeach; ?>
        </ul>
        <p><a href="./">Hasierara itzuli</a></p>
    </main>
</body>
</html>
