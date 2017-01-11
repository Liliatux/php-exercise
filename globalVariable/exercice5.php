<?php 
	setcookie('login', $_POST['login2']);
	setcookie('mdp', $_POST['mdp2']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exo5</title>
</head>
<body>
	<form action="exercice5.php" method="post">
		<label for="login2">Modifier l'identifiant</label>
		<input type="text" name="login2" id="login2">
		<label for="mdp2">Modifier le mot de passe</label>
		<input type="password" name="mdp2" id="mdp2">
		<input type="submit">
	</form>

	<?php echo $_COOKIE['login'].' '.$_COOKIE['mdp']; ?>
</body>
</html>