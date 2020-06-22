<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>">
    	<fieldset>
        	<label>Digite um texto</label>
            <input type="text" name="string">
            <input type="submit" name="enviar" value="Enviar">
        </fieldset>
    </form>
    <?php
		if(isset($_GET["enviar"])){
			$string = $_GET["string"];
			
			$Tstring = strlen($string);
			
			if($Tstring <= 20){
				$inv = strrev($string);
				print $inv;
			}
			else{
				print "Há um número maior de caracteres";
			}
		}
	?>
</body>
</html>
