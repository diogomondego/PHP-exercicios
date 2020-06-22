<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>">
    	<fieldset>
        	<legend>Hotel</legend>
            <label>Digite seu nome:</label><br/>
            <input type="name" name="nome"><br/>
            <label>Digite sua quantidade de diárias:</label><br/>
            <input type="number" name="dia"><br/>
        </fieldset>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php
		if(isset($_GET["enviar"])){
			$dia = $_GET["dia"];
			$nome = $_GET["nome"];
			if($dia < 15){
				$to = ($dia * 60) + ($dia * 8);
				print "Sr.(ª) {$nome}, você pagará R$ ".$to;
			}
			elseif($dia == 15){
				$to = ($dia * 60) + ($dia * 6);
				print "Sr.(ª) {$nome}, você pagará R$ ".$to;
			}
			elseif($dia > 15){
				$to = ($dia * 60);
				$to +=$dia * 5.5;
				print "Sr.(ª) {$nome}, você pagará R$ ".$to;
			}
		}
	?>
</body>
</html>
