<?php 
	$batiment = $_GET['batiment'];
	$salle = $_GET['salle'];

	if (isset($batiment) && isset($salle)) {
		echo "Vous êtes dans le bâtiment: $batiment en salle: $salle.";
	} else {
		echo "Il n'y a pas de paramètres.";
	}
?>