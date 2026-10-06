<?php
require_once __DIR__ . '/Mario.php';
require_once __DIR__ . '/Luigi.php';
require_once __DIR__ . '/Goomba.php';
require_once __DIR__ . '/Koopa.php';

$mario = new Mario('Mario', 100, 12, 8, 'Sua bota');
$luigi = new Luigi('Luigi', 100, 10, 9, 'Salto handia');
$goomba = new Goomba('Goomba', 40, 4, 3, 5, 6);
$koopa = new Koopa('Koopa', 60, 7, 5, 6, 8, true);

$pertsonaiak = array($mario, $luigi, $goomba, $koopa);
?>
<!DOCTYPE html>
<html lang="eu">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mario Bros pertsonaiak</title>
</head>
<body>
	<h1>Mario Bros pertsonaiak</h1>
	<?php foreach ($pertsonaiak as $pertsonaia) { ?>
		<section>
			<h2><?php echo htmlspecialchars($pertsonaia->getIzena(), ENT_QUOTES, 'UTF-8'); ?></h2>
			<p><?php echo htmlspecialchars($pertsonaia->mugitu(), ENT_QUOTES, 'UTF-8'); ?></p>
			<p>Erasoaren mina: <?php echo $pertsonaia->erasoEgin(); ?></p>
			<p>Bizi-puntuak: <?php echo $pertsonaia->getBiziPuntuak(); ?></p>
			<?php if ($pertsonaia instanceof Salto) { ?>
				<p>Saltoaren indarra: <?php echo $pertsonaia->saltoEgin(); ?></p>
			<?php } ?>
			<?php if ($pertsonaia instanceof Mario || $pertsonaia instanceof Luigi) { ?>
				<p>Gaitasun berezia: <?php echo htmlspecialchars($pertsonaia->getGaitasunBerezia(), ENT_QUOTES, 'UTF-8'); ?></p>
			<?php } ?>
		</section>
	<?php } ?>

	<h2>Mina jasotzea</h2>
	<p><?php echo htmlspecialchars($mario->getIzena(), ENT_QUOTES, 'UTF-8'); ?> 15eko mina jaso ondoren: <?php echo $mario->minaJaso(15); ?> bizi-puntu.</p>
</body>
</html>