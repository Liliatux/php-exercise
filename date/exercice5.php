<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exo5</title>
</head>
<body>
	<?php 
		$oldDate = new DateTime('2016-05-16');
		$newDate = new DateTime('2017-01-11');
		$interval = $oldDate->diff($newDate);
		echo $interval->format('%R%a days');
		 
	?>
</body>
</html>