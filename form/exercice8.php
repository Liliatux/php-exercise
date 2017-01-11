<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form8</title>
</head>
<body>
	<b>Exercice 8:</b>
	<div>
		<?php 
		$extension = '.pdf';
		$extensionPost = strrchr($_FILES['file']['name'], '.');

		if(empty($_POST) || $extension !== $extensionPost){ ?>
			<form action="exercice8.php" method="post" enctype="multipart/form-data">
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
			echo $_POST['civil'].' '.$_POST['name3'].' '.$_POST['firstName3'].' '.$_FILES['file']['name'];
		} 
		?>
	</div>
</body>
</html>