<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		$x = 1;
		while($x <= 200){
			if($x%2==0){
				print $x.", ";
			}
			else{
				$x++;
			}
			print "{$x}, ";
			$x++;
		}
	?>
</body>
</html>
