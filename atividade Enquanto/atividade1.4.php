<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF']?>">
        <label for="n">Digite um número N</label>
        <input type="number" name="n" id="n"/>
        <input type="submit" name="enviar" value="Enviar"/>
        <br/>
    </form>
	<?php
		if(isset($_GET["enviar"])){
			$n = $_GET["n"];
			$x = 1;
			while($x <= $n){
				print "$x, ";
				$x++;
			}
		}
	?>
</body>
</html>
