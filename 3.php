<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>STORE</title>
</head>
<body>
	<form method="GET">
		Enter name: <input type="text" name="NAME"><br>
		Enter Roll_no: <input type="text" name="Roll_no"><br>
		Enter Email: <input type="text" name="Email"><br>
		<input type="submit" name="Submit" value="Submit">
	</form>
	<?php
		if (isset($GET['Submit'])) {
			$NAME = $GET['NAME'];
			$ROLL_NO = $GET['Roll_no'];
			$Email = $GET['Email'];

			echo "<table border='1'>
				<tr>
					<th>Name</th>
					<th>Roll Number</th>
					<th>Email</th>
				</tr>
				<tr>
					<td>$NAME</td>
					<td>$ROLL_NO</td>
					<td>$Email</td>
				</tr>
			</table>";
		}
	?>
</body>
</html>
