<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>">
    	<fieldset>
        	<legend>Semana</legend>
            <label>Digite um dia da semana:</label><br/>
            <input type="number" name="dia"><br/>
        </fieldset>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php
		if(isset($_GET["enviar"])){
			$dia = $_GET["dia"];
			switch($dia){
				case 1:
					print "Domingo";
					break;
				case 2:
					print "Segunda-feira";
					break;
				case 3:
					print "Terça-feira";
					break;
				case 4:
					print "Quarta-feira";
					break;
				case 5:
					print "Quinta-feira";
					break;
				case 6:
					print "Sexta-feira";
					break;
				case 7:
					print "Sábado";
					break;
				default:
					print "Dia inválido";
			}
		}
	?>
</body>
</html>
