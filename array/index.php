<?php
	require __DIR__ . '/../array/exercice1.php';
	require __DIR__ . '/../array/exercice2.php';
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
</body>
</html>