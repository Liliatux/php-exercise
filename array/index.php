<?php
	require __DIR__ . '/../array/exercice1.php';
	require __DIR__ . '/../array/exercice4.php';
	require __DIR__ . '/../array/exercice5.php';
	require __DIR__ . '/../array/exercice7.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array</title>
</head>
<body>
	<b>Exercice 1:</b>
	<div><?php print_r($mois); ?></div>
	<b>Exercice 2:</b>
	<div><?= $mois[2]; ?></div>
	<b>Exercice 3:</b>
	<div><?= $mois[5]; ?></div>
	<b>Exercice 4:</b>
	<div><?php print_r($mois4); ?></div>
	<b>Exercice 5:</b>
	<div><?php print_r($HautDeFrance); ?></div>
	<b>Exercice 6:</b>
	<div><?= $HautDeFrance[59]; ?></div>
	<b>Exercice 7:</b>
	<div><?php print_r($HautDeFrance2); ?></div>
	<b>Exercice 8:</b>
	<div><?php include 'exercice8.php'; ?></div>
	<b>Exercice 9:</b>
	<div><?php include 'exercice9.php'; ?></div>
	<b>Exercice 10:</b>
	<div><?php include 'exercice10.php'; ?></div>

</body>
</html>