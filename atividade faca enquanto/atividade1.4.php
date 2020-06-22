<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		$x = 10;
		$a = 0;
		do{
			$x /= 2;
			$a += 50;
		}while($x >= 0.05);
		print $x."<br/>";
		print $a." segundos";
	?>
</body>
</html>
