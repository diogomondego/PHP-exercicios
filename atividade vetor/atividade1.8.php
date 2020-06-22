<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>">
    	<fieldset>
    	<legend>Vetor 1</legend>
    	<label>Digite o índice 0</label>
        <input type="number" name="v0" autofocus/><br/>
        <label>Digite o índice 1</label>
        <input type="number" name="v1"/><br/>
        <label>Digite o índice 2</label>
        <input type="number" name="v2"/><br/>
        <label>Digite o índice 3</label>
        <input type="number" name="v3"/><br/>
        <label>Digite o índice 4</label>
        <input type="number" name="v4"/><br/>
        <label>Digite o índice 5</label>
        <input type="number" name="v5"/><br/>
        <label>Digite o índice 6</label>
        <input type="number" name="v6"/><br/>
        <label>Digite o índice 7</label>
        <input type="number" name="v7"/><br/>
        <label>Digite o índice 8</label>
        <input type="number" name="v8"/><br/>
        <label>Digite o índice 9</label>
        <input type="number" name="v9"/><br/>
        </fieldset>
        <input type="submit" name="enviar" value="Enviar"/>
        <br/>
    </form>
	<?php
	if(isset($_GET["enviar"])){
		$v0 = $_GET["v0"];
		$v1 = $_GET["v1"];
		$v2 = $_GET["v2"];
		$v3 = $_GET["v3"];
		$v4 = $_GET["v4"];
		$v5 = $_GET["v5"];
		$v6 = $_GET["v6"];
		$v7 = $_GET["v7"];
		$v8 = $_GET["v8"];
		$v9 = $_GET["v9"];
		$vetor = array($v0, $v1, $v2, $v3, $v4, $v5, $v6, $v7, $v8, $v9);
		$tamanho = sizeof($vetor);
		for ($a = 0; $a < $tamanho; $a++){
			for($b = $a +1; $b < sizeof($vetor); $b++){
				if($vetor[$a] == $vetor[$b]){
					print "O valor {$vetor[$a]} aparece nas posições {$a} e {$b} <br/>";
				}
			}
		}
	}
	?>
</body>
</html>
