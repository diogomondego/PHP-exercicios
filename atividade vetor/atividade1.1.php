<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	$x = 0;
	$y = 0;
		$vetor = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
		foreach($vetor as $aux){
			if($aux%2==0){
				$x++;
			}
			else{
				$y++;
			}
		}
		print "Ímpares: ".$x."<br/>";
		print "Pares: ".$y;
	?>
</body>
</html>
