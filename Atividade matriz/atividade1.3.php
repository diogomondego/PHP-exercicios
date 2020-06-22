<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		$mat = array(
			array(1, 2),
			array(5, 6),
			array(9, 10)
		);
		$mat2 = array();
		print "<pre>";
		print_r($mat);
		print "</pre>";
		for ($i = 0; $i <sizeof($mat); $i++){
			for ($j = 0; $j < 2; $j++){
				print $mat[$i][$j]."<br/>";
				$mat2[$j][$i] = $mat[$i][$j];
				print $mat2[$j][$i]."<br/>";
			}
		}
		print "<pre>";
		print_r($mat2);
		print "</pre>";
	?>
</body>
</html>
