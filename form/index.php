<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulaires</title>
</head>
<body>
	<b>Exercice 1:</b>
	<form action="user.php" method="get">
		<label for="name">Nom</label>
		<input type="text" name="name" id="name">

		<label for="firstName">Prénom</label>
		<input type="text" name="firstName" id="firstName">

		<input type="submit">
	</form>	

	<b>Exercice 2:</b>
	<form action="user.php" method="post">
		<label for="name2">Nom</label>
		<input type="text" name="name2" id="name2">

		<label for="firstName2">Prénom</label>
		<input type="text" name="firstName2" id="firstName2">

		<input type="submit">
	</form>
</body>
</html>