<?php 
	$exo3 = $_GET["dateDebut"]["dateFin"];

	if (isset($exo3)) {
		foreach ($_GET as $value) {
			echo $value.' ';
		}

	} else {
		echo 'pas de données ';
	}
?>