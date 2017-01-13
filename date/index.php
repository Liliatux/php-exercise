<?php 
	$month = array("", "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");
	$day = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exo8</title>
</head>
<body>
	<h1>Calendrier</h1>
	<form action="index.php" method="post">
		<label for="month">Mois</label>
		<select name="month" id="month">
			<?php 
				foreach ($month as $key => $value) {
					echo "<option value='$key'>$value</option>";
				}
			?>
		</select>
		<label for="year">Année</label>
		<select name="year" id="year">
			<?php 
				for ($year = 2017; $year >= 1970; $year--) {
					echo "<option value='$year'>$year</option>";
				}
			?>
		</select>
		<input type="submit">
	</form>
	<div class="choice">
		<?php echo $_POST['month']." ".$_POST['year']; ?>
	</div>
	<table>
		<thead>
			<tr>
				<?php foreach ($day as $value): ?>
					<td><?php echo $value; ?></td>					
				<?php endforeach; ?>
			</tr>
		</thead>
		<tbody>
			<?php 
				$dayInMonth = cal_days_in_month(CAL_GREGORIAN, $_POST['month'], $_POST['year']);

				for ($i = 1; $i <= $dayInMonth; $i++) {
					$week = cal_to_jd(CAL_GREGORIAN, $_POST['month'], $i, $_POST['year']);
					$dayWeek = JDDayOfWeek($week); 

					//Quand le mois commence ouvrir une ligne
					if ($i === 1) {
						//Changer le 0 de dimanche en 7
						if ($dayWeek === 0) {
							$dayWeek = 7;
						}

						//Pour les jours qui ne sont pas présents faire des td vides
						for ($k = 1; $k != $dayWeek; $k++){
							echo "<td></td>";
						}
						
						//Jour des semaines en colone
						echo "<td>$i</td>";
					}
					//Pour la suite du mois
					else {
						//Ouvrir une ligne au début de semaine
						if ($dayWeek === 1) {
							echo "<tr>";
						}

						//Jour des semaines en colone
						echo "<td>$i</td>";
					}

				}
			?>
			</tr>
		</tbody>
	</table>
</body>
</html>