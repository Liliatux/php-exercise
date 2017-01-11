<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form7</title>
</head>
<body>
	<b>Exercice 7:</b>
	<div>
		<?php if(empty($_POST)){ ?>
			<form action="exercice7.php" method="post">
				<label for="civilite">Civilité</label>
				<select name="civil" id="civilite">
					<option value="1">Mme</option>
					<option value="2">Mr</option>
				</select>

				<label for="name3">Nom</label>
				<input type="text" name="name3" id="name3" value="fallsack">

				<label for="firstName3">Prénom</label>
				<input type="text" name="firstName3" id="firstName3" value="Nasus">

				<label for="file">Envoyer un fichier</label>
				<input type="file" name="file" id="file">

				<input type="submit">
			</form>
		<?php } else {
			echo $_POST['civil'].' '.$_POST['name3'].' '.$_POST['firstName3'].' '.$_POST['file'];
		} ?>
	</div>
</body>
</html>