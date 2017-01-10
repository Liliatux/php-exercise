<?php
	require __DIR__ . '/../ParamUrl/exercice1.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Param Url</title>
</head>
<body>
	<b>Exercice 1:</b>
	<a href="index.php?nom=Nemare&prenom=Jean">Liens</a>
	<br><?= $name; ?></br>
	<br><?= $firstName; ?></br>
</body>
</html>