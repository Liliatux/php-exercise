<?php
	setcookie('login', $_POST['login']);
	setcookie('mdp', $_POST['mdp']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exo3</title>
</head>
<body>
	<form action="index.php" method="post">
		<label for="login">Identifiant</label>
		<input type="text" name="login" id="login" value="Lilia">
		<label for="mdp">Mot de passe</label>
		<input type="password" name="mdp" id="mdp" value="lala">
		<input type="submit">
	</form>
	<a href="exercice4.php">Exo4: afficher le coockie</a>
	<a href="exercice5.php">Exo5: modififier le cookie</a>
</body>
</html>