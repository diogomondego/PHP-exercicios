<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>">
    	<label>Digite um valor</label>
        <input type="number" name="x" id="x" autofocus/>
        <br/>
        <input type="submit" name="enviar" value="Enviar" id="botao"/>
    </form>
	<?php
		if(isset($_GET["enviar"])){
			$x = $_GET["x"];
			for($y = 1; $y <= $x; $y++){
				if($x%$y==0){
					print $y.", ";
				}			
			}
		}
	?>
</body>
</html>
