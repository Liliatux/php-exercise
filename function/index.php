<?php 
	require __DIR__ . '/../function/exercice1.php';
	require __DIR__ . '/../function/exercice2.php';
	require __DIR__ . '/../function/exercice3.php';
	require __DIR__ . '/../function/exercice4.php';
	require __DIR__ . '/../function/exercice5.php';
	require __DIR__ . '/../function/exercice6.php';
	require __DIR__ . '/../function/exercice7.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Function</title>
</head>
<body>
	<b>Exercice 1:</b>
	<div><?= exo1(); ?></div>
	<b>Exercice 2:</b>
	<div><?= exo2(); ?></div>
	<b>Exercice 3:</b>
	<div><?= exo3(); ?></div>
	<b>Exercice 4:</b>
	<div><?= exo4(); ?></div>
	<b>Exercice 5:</b>
	<div><?= exo5(); ?></div>
	<b>Exercice 6:</b>
	<div><?= exo6(); ?></div>
	<b>Exercice 7:</b>
	<div><?= exo7("femme", 20); ?></div>
</body>
</html>