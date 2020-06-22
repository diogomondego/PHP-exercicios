<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>">
    	<fieldset>
        	<legend>Pizza</legend>
            <label>Quantidade de pessoas:</label><br/>
            <input type="number" name="pes"><br/>
            <label>Quantidade de coberturas:</label><br/>
            <input type="number" name="cob"><br/>
            <label>Quantidade de latinhas:</label><br/>
            <input type="number" name="lat"><br/>
            <label>Quantidade de pizzas:</label><br/>
            <input type="number" name="piz"><br/>
        </fieldset>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php
		if(isset($_GET["enviar"])){
			$pes = $_GET["pes"];
			$cob = $_GET["cob"];
			$lat = $_GET["lat"];
			$piz = $_GET["piz"];
			$con = (2.8 * $lat) + (29 * $piz) + (1.5 * $cob);
			$con += $con * 0.1;
			echo "Total: R$ {$con} * com taxa de 10% * <br/> Cada pessoa deve pagar: R$ ".$con / $pes;
		}
	?>
</body>
</html>
