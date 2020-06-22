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
        <input type="number" name="v10" autofocus/><br/>
        <label>Digite o índice 1</label>
        <input type="number" name="v11"/><br/>
        <label>Digite o índice 2</label>
        <input type="number" name="v12"/><br/>
        </fieldset>
        <fieldset>
        <legend>Vetor 2</legend>
        <label>Digite o índice 0</label>
        <input type="number" name="v20"/><br/>
        <label>Digite o índice 1</label>
        <input type="number" name="v21"/><br/>
        <label>Digite o índice 2</label>
        <input type="number" name="v22"/><br/>
        </fieldset>
        <input type="submit" name="enviar" value="Enviar"/>
        <br/>
    </form>
	<?php
	if(isset($_GET["enviar"])){
		$v10 = $_GET["v10"];
		$v11 = $_GET["v11"];
		$v12 = $_GET["v12"];
		$v20 = $_GET["v20"];
		$v21 = $_GET["v21"];
		$v22 = $_GET["v22"];
		$vetor = array($v10, $v11, $v12);
		$vetor2 = array($v20, $v21, $v22);
		$tamanho = sizeof($vetor);
		//for ($a = 0; $a < $tamanho; $a++){
			//$vetor3[$a] = $vetor[$a] + $vetor2[$a];
			//echo $vetor3[$a]."<br/>";
		//}
	}
	?>
</body>
</html>
