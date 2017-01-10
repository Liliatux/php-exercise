<?php 
	$semaine = $_GET['semaine'];

	if(isset($semaine)) {
		echo "Semaine: $semaine";
	} else {
		echo "il n'y a pas de paramètre.";
	}
?>