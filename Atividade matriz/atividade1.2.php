<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		$mat = array(
			array(1, 2, 3, 4),
			array(5, 6, 7, 8),
			array(9, 10, 11, 12)
		);
		print "<pre>";
		print_r($mat);
		print "</pre>";
		$j = 0;
		for ($i = 0; $i <sizeof($mat); $i++){
			$vet[$i] = $mat[$i][$j] + $mat[$i][$j+1] + $mat[$i][$j+2] + $mat[$i][$j+3];
			print "{$mat[$i][$j]} + {$mat[$i][$j+1]} + {$mat[$i][$j+2]} + {$mat[$i][$j+3]} = ".$vet[$i]."<br/>";
		}
	?>
</body>
</html>
