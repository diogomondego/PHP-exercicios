<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Atividade 1.8</title>
</head>

<body>
	<form>
    	<fieldset>
        	<label>Digite o valor X</label><br/>
            <input type="text" name="x"/>
            <br/>
            <label>Digite o valor Y</label><br/>
            <input type="text" name="y"/>
            <br/>
            <label>Digite o valor Z</label><br/>
            <input type="text" name="z"/>
            <br/>
            <input type="submit" name="enviar" value="Enviar"/>
            <?php
				if(isset($_GET["enviar"])){
					$x = $_GET["x"];
					$y = $_GET["y"];
					$z = $_GET["z"];
					if($x < ($y+$z) && $y < ($x+$z) && $z < ($x+$y)){
						echo "Com os valores, pode-se obter os comprimentos de um triângulo<br/>";
						if($x == $y && $y == $z){
							echo "É equilátero";
						}
						else if($x == $y || $y == $z || $x == $z){
							echo "É isóceles";
						}
						else if($x != $y && $y != $z){
							echo "É escaleno";
						}
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
