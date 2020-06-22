<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF']?>">
        <label for="n">Digite o número A</label>
        <input type="number" name="a" id="n"/><br/>
        <label for="n">Digite o número B</label>
        <input type="number" name="b" id="n"/><br/>
        <label for="n">Digite o número C</label>
        <input type="number" name="c" id="n"/><br/>
        <label for="n">Digite o número D</label>
        <input type="number" name="d" id="n"/><br/>
        <label for="n">Digite o número E</label>
        <input type="number" name="e" id="n"/><br/>
        <label for="n">Digite o número F</label>
        <input type="number" name="f" id="n"/><br/>
        <label for="n">Digite o número G</label>
        <input type="number" name="g" id="n"/><br/>
        <label for="n">Digite o número H</label>
        <input type="number" name="h" id="n"/><br/>
        <label for="n">Digite o número I</label>
        <input type="number" name="i" id="n"/><br/>
        <label for="n">Digite o número J</label>
        <input type="number" name="j" id="n"/><br/>
        <input type="submit" name="enviar" value="Enviar"/>
        <br/>
    </form>
	<?php
		if(isset($_GET["enviar"])){
			$a = $_GET["a"];
			$b = $_GET["b"];
			$c = $_GET["c"];
			$d = $_GET["d"];
			$e = $_GET["e"];
			$f = $_GET["f"];
			$g = $_GET["g"];
			$h = $_GET["h"];
			$i = $_GET["i"];
			$j = $_GET["j"];
			$x = 1;
			while($x <= 10){
				if($n >= 10){
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
