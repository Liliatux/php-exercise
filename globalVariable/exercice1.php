<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exo1</title>
</head>
<body>
	<b>User Agent:</b>
	<br><?php echo $_SERVER['HTTP_USER_AGENT']; ?></br>
	<b>Adresse IP:</b>
	<br><?php echo $_SERVER['REMOTE_ADDR']; ?></br>
	<b>Nom du Serveur:</b>
	<br><?php echo $_SERVER['SERVER_NAME']; ?></br>
</body>
</html>