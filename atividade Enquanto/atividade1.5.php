<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF']?>">
        <label for="n">Digite um número entre 1 e 9</label>
        <input type="number" name="n" id="n"/>
        <input type="submit" name="enviar" value="Enviar"/>
        <br/>
    </form>
	<?php
		if(isset($_GET["enviar"])){
			$n = $_GET["n"];
			$x = 1;
			while($x <= 10){
				if($n%2==0){
					$t = $n * $x;
					print "{$n} x {$x} = {$t} <br/>";
				}
				elseif($n%2==1){
					$t = $n + $x;
					print "{$n} + {$x} = {$t} <br/>";
				}
				else{
					$x++;
				}
				$x++;
			}
		}
	?>
</body>
</html>
