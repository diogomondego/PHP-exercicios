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
            <label>Digite um número de início</label>
            <input type="text" name="inicio"><br/>
            <label>Digite um número de fim</label>
            <input type="text" name="fim"><br/>
            <input type="submit" name="enviar" value="Enviar">
        </fieldset>
    </form>
    <?php
		if(isset($_GET["enviar"])){
			$string = $_GET["string"];
			$inicio = $_GET["inicio"];
			$fim = $_GET["fim"];
			
			$Tstring = strlen($string);
			
			if($Tstring <= 20){
				if($inicio >= 0 && $fim <= $Tstring){
					$res = substr($string, $inicio, $fim);
					print "A palavra fica -> ".$res;
				}
				else{
					echo "Início ou Fim inválido";
				}
			}
			else{
				print "Há um número maior de caracteres";
			}
		}
	?>
</body>
</html>
