<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<b>Exercice 6:</b>
	<div>
		<?php if(empty($_GET)){ ?>
			<form action="exercice6.php" method="get">
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
		<?php } else {
			echo $_GET['civil'].' '.$_GET['name3'].' '.$_GET['firstName3'];
		} ?>
	</div>
</body>
</html>