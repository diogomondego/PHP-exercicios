<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Atividade 2.1</title>
</head>

<body>
	<form>
    	<fieldset>
        	<label>Digite quantas horas você trabalhou no mês:</label><br/>
            <input type="number" name="mes" autofocus/>
            <br/>
            <label>Digite seu salário por hora:</label><br/>
            <input type="text" name="sal"/>
            <br/>
            <input type="submit" name="enviar" value="Enviar"/>
            <?php
				if(isset($_GET["enviar"])){
					$mes = $_GET["mes"];
					$sal = $_GET["sal"];
					if($mes > 160){
						$extraH = $mes-160;
						$mes -= $extraH;
						$total = $sal*$mes;
						$extraT = $sal*0.5*$extraH;
						$total += $extraT;
						echo "Seu salário total, com as horas extras, fica R$ {$total}";
					}
					else{
						$total = $sal*$mes;
						echo "Seu salário total foi de R$ {$total}";
					}
				}
			?>
        </fieldset>
    </form>
</body>
</html>
