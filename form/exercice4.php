<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<b>Exercice 4:</b>
	<form action="user.php" method="post">
		<label for="name2">Nom</label>
		<input type="text" name="name2" id="name2" value="Love">

		<label for="firstName2">Prénom</label>
		<input type="text" name="firstName2" id="firstName2" value="Boby">

		<input type="submit">
	</form>
	<br><?php echo $_POST['name2'].' '.$_POST['firstName2']; ?></br>
</body>
</html>