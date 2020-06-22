<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		$a = 0;
		$b = 0;
		for($x = 50; $x <= 70; $x++){
			if($x%2==0){
				$a = $a + $x;
				$b++;
			}
			
		}
		$y = $a / $b;
		print $y." é a media aritmética <br/>";
		print $a ." e ".$b;
	?>
</body>
</html>
