<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Atividade 1.7</title>
</head>

<body>
	<form>
    	<fieldset>
        	<label>Digite o valor A</label><br/>
            <input type="text" name="a"/>
            <br/>
            <label>Digite o valor B</label><br/>
            <input type="text" name="b"/>
            <br/>
            <label>Digite o valor C</label><br/>
            <input type="text" name="c"/>
            <br/>
            <input type="submit" name="enviar" value="Enviar"/>
            <?php
				if(isset($_GET["enviar"])){
					$a = $_GET["a"];
					$b = $_GET["b"];
					$c = $_GET["c"];
					if($a < ($b+$c) && $b < ($a+$c) && $c < ($a+$b)){
						echo "Com os valores, o triângulo é formado";
					}
					else{
						echo "Não formam um triângulo";
					}
				}
			?>
        </fieldset>
    </form>
</body>
</html>
