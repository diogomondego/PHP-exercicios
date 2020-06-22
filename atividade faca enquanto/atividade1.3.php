<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		$x = 85;
		$a = 0;
		do{
			if($x%2==0){
				print $x."<br/>";
			}
			$a = $a + $x; 
			$x++;
		}while($x <= 907);
		print "Soma total: ".$a;
	?>
</body>
</html>
