<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF']?>">
        <label for="n">Digite um número</label>
        <input type="number" name="n" id="n"/>
        <input type="submit" name="enviar" value="Enviar"/>
        <br/>
    </form>
	<?php
		if(isset($_GET["enviar"])){
			$n = $_GET["n"];
			$a = 0;
			do{
				$n /= 2;
				$a++;
			}while($n > 1);
			print $n."<br/>";
			print $a;
		}
	?>
</body>
</html>
