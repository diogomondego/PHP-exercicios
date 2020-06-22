<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>">
    	<fieldset>
        	<label>Digite uma palavra</label>
            <input type="text" name="string"><br/>
            <label>Digite uma letra</label>
            <input type="text" name="letra"><br/>
            <input type="submit" name="enviar" value="Enviar">
        </fieldset>
    </form>
    <?php
		if(isset($_GET["enviar"])){
			$string = $_GET["string"];
			$letra = $_GET["letra"];
			
			$Tstring = strlen($string);
			
			if($Tstring <= 40){
				$cont = substr_count($string, $letra);
				if($cont >0){
					print "A letra '{$letra}' aparece {$cont} vez(es) na palavra '{$string}'";
				}
				else{
					echo "A letra '{$letra}' não aparece na palavra '{$string}'";
				}
			}
			else{
				print "Há um número maior de caracteres";
			}
		}
	?>
</body>
</html>
