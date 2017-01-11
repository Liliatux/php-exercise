<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<b>Exercice 3:</b>
	<form action="exercice3.php" method="get">
		<label for="name">Nom</label>
		<input type="text" name="name" id="name" value="Tux">

		<label for="firstName">Prénom</label>
		<input type="text" name="firstName" id="firstName" value="Lilia">

		<input type="submit">
	</form>	
	<br><?php echo $_GET['name'].' '.$_GET['firstName']; ?></br>
</body>
</html>