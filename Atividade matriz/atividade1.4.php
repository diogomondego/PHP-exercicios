<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		$mat = array();
		for ($i = 0; $i <2; $i++){
			for ($j = 0; $j < 2; $j++){
				if($i == $j){
					$mat[$i][$j] = 1;
				}
				else{
					$mat[$i][$j] = 0;
				}
			}
		}
		print "<pre>";
		print_r($mat);
		print "</pre>";
	?>
</body>
</html>
