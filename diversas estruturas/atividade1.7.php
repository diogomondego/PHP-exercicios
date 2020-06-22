<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>">
    	<fieldset>
        	<legend>Nota</legend>
            <label>Digite sua nota:</label><br/>
            <input type="number" name="nota"><br/>
        </fieldset>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php
		if(isset($_GET["enviar"])){
			$nota = $_GET["nota"];
			if($nota < 3){
				print "Você está no conceito E";
			}
			elseif($nota >= 3 && $nota <= 5){
				print "Você está no conceito D";
			}
			elseif($nota >= 6 && $nota <= 7){
				print "Você está no conceito C";
			}
			elseif($nota >= 8 && $nota <= 9){
				print "Você está no conceito B";
			}
			else{
				print "Você está no conceito A";
			}
		}
	?>
</body>
</html>
