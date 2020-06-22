<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>">
    	<fieldset>
        	<legend>Nivel do Professor</legend>
            <label>Quantidade total de horas trabalhadas:</label>
            <input type="number" name="hora"><br/>
            <input type="radio" value="n1" name="n" id="n1"> <label for="n1">Professor Nível 1</label><br/>
            <input type="radio" value="n2" name="n" id="n2"> <label for="n2">Professor Nível 2</label><br/>
            <input type="radio" value="n3" name="n" id="n3"> <label for="n3">Professor Nível 3</label><br/>
        </fieldset>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php
		if(isset($_GET["enviar"])){
			$hora = $_GET["hora"];
			$n = $_GET["n"];
			switch($n){
				case "n1":
					$sal = $hora*12;
					print "Salário: R$ {$sal}";
					break;
				case "n2":
					$sal = $hora*17;
					print "Salário: R$ {$sal}";
					break;
				case "n3":
					$sal = $hora*25;
					print "Salário: R$ {$sal}";
					break;
			}
		}
	?>
</body>
</html>
