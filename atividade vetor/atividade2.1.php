<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<!--<form action="<?php $_SERVER['PHP_SELF'] ?>">
    	<fieldset>
    	<legend>Vetor 1</legend>
    	<label>Digite o índice 0</label>
        <input type="text" name="v0" autofocus/><br/>
        <label>Digite o índice 1</label>
        <input type="text" name="v1"/><br/>
        <label>Digite o índice 2</label>
        <input type="text" name="v2"/><br/>
        <label>Digite o índice 3</label>
        <input type="text" name="v3"/><br/>
        <label>Digite o índice 4</label>
        <input type="text" name="v4"/><br/>
        </fieldset>
        <fieldset>
        <legend>Vetor 2</legend>
        <label>Digite o índice 5</label>
        <input type="text" name="v5"/><br/>
        <label>Digite o índice 6</label>
        <input type="text" name="v6"/><br/>
        <label>Digite o índice 7</label>
        <input type="text" name="v7"/><br/>
        <label>Digite o índice 8</label>
        <input type="text" name="v8"/><br/>
        <label>Digite o índice 9</label>
        <input type="text" name="v9"/><br/>
        </fieldset>
        <input type="submit" name="enviar" value="Enviar"/>
        <br/>
    </form>-->
	<?php
	if(isset($_GET["enviar"])){
		//$v0 = $_GET["v0"];
//		$v1 = $_GET["v1"];
//		$v2 = $_GET["v2"];
//		$v3 = $_GET["v3"];
//		$v4 = $_GET["v4"];
//		$v5 = $_GET["v5"];
//		$v6 = $_GET["v6"];
//		$v7 = $_GET["v7"];
//		$v8 = $_GET["v8"];
//		$v9 = $_GET["v9"];
		//$vetor = array($v0, $v1, $v2, $v3, $v4);
		//$vetor2 = array($v5, $v6, $v7, $v8, $v9);
		$vetor = array(19, 5, 2, 6, 12);
		$vetor2 = array(5, 0, 9, 4, 12);
		$tamanho = sizeof($vetor);
		for ($a = 0; $a < $tamanho; $a++){
			/*if($vetor[$a] == $vetor2[$a]){
				print "Os valores iguais são ".$vetor2[$a];
			}
			else{
				print "Não achei o nome nos índices";
			}*/
			for ($b = 0; $b < $a; $b++){
				if($vetor[$a] == $vetor2[$a]){
					print "Os valores iguais são ".$vetor2[$a];
				}
				else{
					print "Não achei o nome nos índices";
				}
			}
		}
	}
	?>
</body>
</html>
