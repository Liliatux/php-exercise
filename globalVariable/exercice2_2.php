<?php 
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exo2</title>
</head>
<body>
	<br><?php echo $_SESSION['nom'].' '.$_SESSION['prenom'].' '.$_SESSION['age'] ?></br>
</body>
</html>