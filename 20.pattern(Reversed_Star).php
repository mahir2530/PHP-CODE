<html>
<body bgcolor="#92908D">
	<h1>This is Reverse star pattern</h1>
	<p style="color: #000000;">
		<?php
		for($i=1; $i<=5; $i++)
		{
			for($j=5; $j>=$i; $j--)
			{
				echo " *";
			}
			echo "<br>";
		}
		?>
	</p>
</body>
</html>
