<?php
	$age = $_GET['age'];
	if ($age) {
		echo $age;
	} else {
		echo("age n'existe pas");
	}
	?>