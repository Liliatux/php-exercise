<?php 
	function exo4 ($a = 5, $b = 10) {
		if($a > $b) {
			return "Le premier nombre est plus grand";
		} else if ($a < $b) {
			return "Le premier nombre est plus petit.";
		} else if ($a == $b) {
			return "Les deux nombres sont identiques.";
		}
	}
?>