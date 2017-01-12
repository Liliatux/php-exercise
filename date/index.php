<?php 
	$month = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");
	$day = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exo8</title>
</head>
<body>
	<h1>Calendrier</h1>
	<?php echo $month[""]; ?>
	<form action="index.php" method="post">
		<label for="month">Mois</label>
		<select name="month" id="month">
			<?php 
				foreach ($month as $value) {
					echo "<option value='$value'>$value</option>";
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
		<?php echo $_POST['month'].' '.$_POST['year'] ?>
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
			<tr>
				<?php foreach ($day as $key => $value): ?>
						<td><?php echo $key; ?></td>
				<?php endforeach; ?>				
			</tr>
		</tbody>
	</table>
</body>
</html>