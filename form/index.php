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
		<input type="text" name="name" id="name" value="Tux">

		<label for="firstName">Prénom</label>
		<input type="text" name="firstName" id="firstName" value="Lilia">

		<input type="submit">
	</form>	

	<b>Exercice 2:</b>
	<form action="user.php" method="post">
		<label for="name2">Nom</label>
		<input type="text" name="name2" id="name2" value="Love">

		<label for="firstName2">Prénom</label>
		<input type="text" name="firstName2" id="firstName2" value="Boby">

		<input type="submit">
	</form>

	<b>Exercice 5:</b>
	<form action="index.php" method="get">
		<label for="civilite">Civilité</label>
		<select name="civil" id="civilite">
			<option value="1">Mme</option>
			<option value="2">Mr</option>
		</select>

		<label for="name3">Nom</label>
		<input type="text" name="name3" id="name3" value="fallsack">

		<label for="firstName3">Prénom</label>
		<input type="text" name="firstName3" id="firstName3" value="Nasus">

		<input type="submit">
	</form>
</body>
</html>