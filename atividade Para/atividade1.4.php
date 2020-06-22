<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF']?>">
    	<label for="y">Digite o valor inicial</label>
        <input type="text" name="x" id="x"/><br/>
        <label for="y">Digite o valor final</label>
        <input type="text" name="y" id="y"/><br/>
        <input type="submit" name="enviar" value="Enviar"/>
    </form>
	<?php
		if(isset($_GET["enviar"])){
			$x = $_GET["x"];
			$y = $_GET["y"];
			$a = 0;
			$b = 0;
			for($x = $x; $x <= $y; $x++){
				$a = $a + $x;
				
			}
			print $a;
		}
	?>
</body>
</html>
