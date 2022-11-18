<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equip="author" content="RAYMUNDO, LYVAMIE S.">
	<title>Assign6_2</title>
</head>
<body>
	<table align="left" border="1" cellpadding="3" cellspacing="0">

		<?php

		for($x=1;$x<=50;$x++)
			{
				echo "<tr>";
				for ($y=1;$y<=1;$y++)
				{
				echo "<td> $x * $y = ".$x * $y."</td>";
				}
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>