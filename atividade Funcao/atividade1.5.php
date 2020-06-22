<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>">
    	<label>Digite um valor em dólar</label>
        <input type="number" name="x"><br/>
        <label>Digite a cotação do dólar</label>
        <input type="text" name="y"><br/>
        <input type="submit" value="Enviar" name="enviar">
    </form>
    <?php
		if(isset($_GET["enviar"])){
			$x = $_GET["x"];
			$y = $_GET["y"];
			function dol($x, $y){
				$z = $x * $y;
				print "US$ {$x} convertido em reais fica R$ {$z}";
			}
			dol($x, $y);
		}
	?>
</body>
</html>
