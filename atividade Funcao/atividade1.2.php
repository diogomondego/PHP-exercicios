<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>">
    	<label>Digite uma temperatura em Celsius</label>
        <input type="number" name="x">
        <input type="submit" value="Enviar" name="enviar">
    </form>
    <?php
		if(isset($_GET["enviar"])){
			$x = $_GET["x"];
			
			function converte($x){
				print (9 * $x + 160)/5 ."º F";
			}
			converte($x);
		}
	?>
</body>
</html>
