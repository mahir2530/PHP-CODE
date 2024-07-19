<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Employee</title>
</head>
<body>
<form method="POST">
	Enter Name <input type="text" name="name"><br>
	Select Designation <select name="deg">
		<option>Director</option>
		<option>Manager</option>
		<option>Clerk</option>
		<option>Peon</option>
	</select><br>
	Enter Salary <input type="number" name="sal"><br>
	Enter HRA <input type="number" name="hra"><br>
	Enter DA <input type="number" name="da"><br>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {

	$sal=$_POST['sal'];
	$hra=$_POST['hra'];
	$da=$_POST['da'];

	class Employee{

		function hra_fun($sal,$hra){
			$res=($sal*$hra)/100;
			$res_t=$sal+$res;
			echo "Salary after adding HRA is:".$res_t."<br>";
		}

		function da_fun($sal,$da){
			$res=($sal*$da)/100;
			$res_t=$sal-$res;
			echo "Salary after deducting DA is:".$res_t."<br>";
		}
	}

	$obj=new Employee();
	$obj->hra_fun($sal,$hra);
	$obj->da_fun($sal,$da);
}
?>
