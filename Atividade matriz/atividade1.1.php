<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>">
    	<label>Digite um número X</label>
        <input type="number" name="x"/><br/>
        </fieldset>
        <input type="submit" name="enviar" value="Enviar"/>
        <br/>
    </form>
	<?php
		if(isset($_GET["enviar"])){
			$x = $_GET["x"];
			$mat = array(
				array(1, 2, 3),
				array(4, 5, 6),
				array(7, 8, 9)
			);
			for ($i = 0; $i < sizeof($mat); $i++){
				for ($j = 0; $j < sizeof($mat); $j++){
					if($mat[$i][$j] == $x){
						print "O número existe na Matriz";
					}
					else{
						print "Não existe";
					}
				}
			}
		}
	?>
</body>
</html>
