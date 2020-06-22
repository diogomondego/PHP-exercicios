<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Atividade 1.6</title>
</head>

<body>
	<form>
    	<fieldset>
        	<label>Digite o valor de A</label><br/>
            <input type="number" name="a"/>
            <br/>
            <label>Digite o valor de B</label><br/>
            <input type="number" name="b"/>
            <br/>
            <label>Digite o valor de C</label><br/>
            <input type="number" name="c"/>
            <br/>
            <label>Digite o valor de D</label><br/>
            <input type="number" name="d"/>
            <br/>
            <input type="submit" name="enviar" value="Enviar"/>
            <?php
				if(isset($_GET["enviar"])){
					$a = $_GET["a"];
					$b = $_GET["b"];
					$c = $_GET["c"];
					$d = $_GET["d"];
					echo "O(s) numero(s) divisíveis por 2 ou 3 são:<br/>";
					if($a %2==0 || $a %3==0){
						echo "{$a}<br/>";
					}
					if($b %2==0 || $b %3==0){
						echo "{$b}<br/>";
					}
					if($c %2==0 || $c %3==0){
						echo "{$c}<br/>";
					}
					if($d %2==0 || $d %3==0){
						echo "{$d}<br/>";
					}
				}
			?>
        </fieldset>
    </form>
</body>
</html>
