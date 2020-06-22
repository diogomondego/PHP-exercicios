<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		$vetor = array(1, 2, 10, 4, 5, 6, 7, 8, 9, 10);
		$tamanho = sizeof($vetor);
		for ($i = 0; $i < $tamanho; $i++){
			if($vetor[$i] == 10){
				echo "O número 10 aparece na posição ".$i."<br/>";
			}
		}
	?>
</body>
</html>
