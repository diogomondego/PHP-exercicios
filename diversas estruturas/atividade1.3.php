<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>">
    	<fieldset>
        	<legend>Cálculo de imposto</legend>
            <label>Ano do veículo:</label>
            <input type="number" name="ano"><br/>
            <label>Preço do veículo:</label>
            <input type="number" name="preco"><br/>
        </fieldset>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php
		if(isset($_GET["enviar"])){
			$ano = $_GET["ano"];
			$preco = $_GET["preco"];
			if($ano < 2000){
				$imp = $preco * 0.07;
				print "Imposto: R$ ".$imp;
			}
			else{
				$imp = $preco * 0.09;
				print "Imposto: R$ ".$imp;
			}
		}
	?>
</body>
</html>
