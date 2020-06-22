<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		$x = 1;
		$a = 0;
		do{
			$a = $a + $x; 
			$x++;
		}while($x <= 100);
		print $a;
	?>
</body>
</html>
