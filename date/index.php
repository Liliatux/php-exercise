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
			<option value="Janvier">Janvier</option>
		</select>
		<label for="year">Année</label>
		<select name="year" id="year">
			<option value="2017">2017</option>
		</select>
		<input type="submit">
	</form>
	<table>
		<thead>
			<tr><?php echo $_POST['month'].' '.$_POST['year'] ?></tr>
		</thead>
		<tbody>
			//ligne
			<tr>
				//colone
				<td></td>
			</tr>
		</tbody>
	</table>
</body>
</html>