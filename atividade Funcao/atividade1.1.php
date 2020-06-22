<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>">
    	<label>Digite um número</label>
        <input type="number" name="x">
        <input type="submit" value="Enviar" name="enviar">
    </form>
    <?php
		if(isset($_GET["enviar"])){
			$x = $_GET["x"];
			
			function verifica($x){
				print ($x % 2 == 0) ? "É par" : "É ímpar";
			}
			verifica($x);
		}
	?>
</body>
</html>
