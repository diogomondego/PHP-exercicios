<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>">
    	<fieldset>
        	<legend>Func. 1</legend>
            <label>Nome:</label>
        	<input type="name" name="v0" autofocus/><br/>
            <label>Idade:</label>
        	<input type="number" name="v1"/><br/>
            <label>Sexo:</label>
        	<input type="name" name="v2"/><br/>
            <label>Salário:</label>
        	<input type="number" name="v3"/><br/>
        </fieldset>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php
		if(isset($_GET["enviar"])){
			$v0 = $_GET["v0"];
			$v1 = $_GET["v1"];
			$v2 = $_GET["v2"];
			$v3 = $_GET["v3"];
			$vetor = array($v0,$v1,$v2,$v3);
			$i = 0;
			if($vetor[$i+2] == "masculino"){
				if($vetor[$i+1] >= 30){
					$vetor[$i+3] -=100;
					print "Nome: {$vetor[$i]} <br/> Salário: ".$vetor[$i+3];
				}
				else{
					$vetor[$i+3] -=75;
					print "Nome: {$vetor[$i]} <br/> Salário: ".$vetor[$i+3];
				}
			}
			else{
				if($vetor[$i+1] > 30){
					$vetor[$i+3] -=50;
					print "Nome: {$vetor[$i]} <br/> Salário: ".$vetor[$i+3];
				}
				else{
					$vetor[$i+3] -=35;
					print "Nome: {$vetor[$i]} <br/> Salário: ".$vetor[$i+3];
				}
			}
		}
	?>
</body>
</html>
