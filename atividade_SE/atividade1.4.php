<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Atividade 1.4</title>
</head>

<body>
	<form>
    	<fieldset>
        	<label>Qual seu gênero? Masculino ou feminino?</label><br/>
            <input type="text" name="genero"/>
            <br/>
            <label>Qual sua altura?</label><br/>
            <input type="text" name="altura"/>
            <br/>
            <input type="submit" name="enviar" value="Enviar"/>
            <?php
				if(isset($_GET["enviar"])){
					$genero = $_GET["genero"];
					$altura = $_GET["altura"];
					if($genero == "masculino"){
						$peso = (72.7*$altura)-58;
						echo "Seu peso ideal é de {$peso}Kg";
					}
					else{
						$peso = (62.1*$altura)-44.7;
						echo "Seu peso ideal é de {$peso}Kg";
					}
				}
			?>
        </fieldset>
    </form>
</body>
</html>
