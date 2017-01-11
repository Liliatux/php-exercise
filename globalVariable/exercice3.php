<?php
	setcookie('login', $_POST['login'], time() + 21*24*3600, null, null, false, true);
	setcookie('mdp', $_POST['mdp'], time() + 21*24*3600, null, null, false, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exo3</title>
</head>
<body>
	<form action="exercice4.php" method="post">
		<label for="login">Identifiant</label>
		<input type="text" name="login" id="login" value="Lilia">
		<label for="mdp">Mot de passe</label>
		<input type="password" name="mdp" id="mdp" value="lala">
		<input type="submit">
	</form>
</body>
</html>