<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Atividade 2.4</title>
</head>

<body>
	<form>
    	<fieldset>
        	<label>Digite o valor A:</label><br/>
            <input type="number" name="a" autofocus/>
            <br/>
            <label>Digite o valor B:</label><br/>
            <input type="text" name="b"/>
            <br/>
            <label>Digite o valor C:</label><br/>
            <input type="text" name="c"/>
            <br/>
            <input type="submit" name="enviar" value="Enviar"/>
            <?php
				if(isset($_GET["enviar"])){
					$a = $_GET["a"];
					$b = $_GET["b"];
					$c = $_GET["c"];
					if($a < $b && $b < $c){
						echo "$a $b $c";
					}
					elseif($a < $b && $c < $b){
						echo "$a $c $b";
					}
					elseif($b < $a && $a < $c){
						echo "$b $a $c";
					}					
					elseif($b < $c && $c < $a){
						echo "$b $c $a";
					}
					elseif($c < $a && $a < $b){
						echo "$c $a $b";
					}
					elseif($c < $b && $b < $a){
						echo "$c $b $a";
					}
				}
			?>
        </fieldset>
    </form>
</body>
</html>
