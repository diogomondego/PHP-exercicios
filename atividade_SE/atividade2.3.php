<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Atividade 2.3</title>
</head>

<body>
	<form>
    	<fieldset>
        	<label>Digite seu nº ID de empregado:</label><br/>
            <input type="number" name="id" autofocus/>
            <br/>
            <label>Digite seu ano de nascimento:</label><br/>
            <input type="number" name="nasc"/>
            <br/>
            <label>Digite seu ano de admissão:</label><br/>
            <input type="number" name="adm"/>
            <br/>
            <input type="submit" name="enviar" value="Enviar"/>
            <?php
				if(isset($_GET["enviar"])){
					$nasc = $_GET["nasc"];
					$adm = $_GET["adm"];
					$idade = date("Y") - $nasc;
					$tempT = 2017 - $adm;
					if($idade >= 65 || $tempT >= 30 || ($idade >= 60 && $tempT >= 25)){
						echo "Idade: {$idade}<br/> Tempo de trabalho: {$tempT}<br/> Requerer aposentadoria";
					}
					else{
						echo "Não requerer";
					}
				}
			?>
        </fieldset>
    </form>
</body>
</html>
