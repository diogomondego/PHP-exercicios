<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>">
    	<label>Digite sua idade</label>
        <input type="number" name="x">
        <input type="submit" value="Enviar" name="enviar">
    </form>
    <?php
		if(isset($_GET["enviar"])){
			$x = $_GET["x"];
			
			function cat($x){
				if($x >= 5 && $x <= 7){
					return "Sua categoria é INFANTIL A";
				}
				elseif($x >= 8 && $x <= 10){
					return "Sua categoria é INFANTIL B";
				}
				elseif($x >= 11 && $x <= 13){
					return "Sua categoria é JUVENIL A";
				}
				elseif($x >= 14 && $x <= 17){
					return "Sua categoria é JUVENIL B";
				}
				elseif($x >= 18){
					return "Sua categoria é ADULTO";
				}
			}
			print cat($x);
		}
	?>
</body>
</html>
