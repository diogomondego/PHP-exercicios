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
			$vetor2[$a] = $vetor[$a];
			echo $vetor2[$a]."<br/>";
		}
	?>
</body>
</html>
