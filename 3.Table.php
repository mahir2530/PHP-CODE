<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>STORE</title>
</head>
<body>
	<form method="POST">
		Enter name: <input type="text" name="NAME"><br>
		Enter Roll_no: <input type="number" name="Roll_no"><br>
		Enter Email: <input type="email" name="Email"><br>
		<input type="submit" name="Submit" value="Submit">
	</form>
	<?php
		if (isset($_POST['Submit'])) {
			$NAME = $_POST['NAME'];
			$ROLL_NO = $_POST['Roll_no'];
			$Email = $_POST['Email'];

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
