<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>">
    	<fieldset>
        	<legend>Ração</legend>
            <label>Digite o peso do saco da ração, em quilos:</label><br/>
            <input type="name" name="saco"><br/>
            <label>Digite a qnt de ração p/ cada gato, em gramas:</label><br/>
            <input type="number" name="por"><br/>
        </fieldset>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php
		if(isset($_GET["enviar"])){
			$saco = $_GET["saco"];
			$por = $_GET["por"];
			$res = $saco - ((($por/1000)*2))*5;
			echo "Restante de ração, após 5 dias: {$res} Kg";
		}
	?>
</body>
</html>
