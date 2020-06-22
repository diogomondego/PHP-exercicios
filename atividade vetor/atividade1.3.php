<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		$vetor = array(1, 2, 3, 4, 5);
		$tamanho = sizeof($vetor);
		for ($a = 0; $a < $tamanho; $a++){
			echo $vetor[$a]."<br/>";
		}
		for ($i = 4; $i >= 0; $i--){
			$vetor2[$i] = $vetor[$i];
			echo $vetor2[$i]."<br/>";
		}
	?>
</body>
</html>
