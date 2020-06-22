<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Atividade 1.2</title>
</head>

<body>
	<form>
    	<fieldset>
        	<label>Informe seu salário:</label><br/>
            <input type="text" name="salario"/>
            <br/>
            <input type="submit" name="enviar" value="Enviar"/>
            <?php
				if(isset($_GET["enviar"])){
					$salario = $_GET["salario"];
					if($salario < 600){
						$salario += $salario * 0.3;
						echo "Seu salário atual com reajuste de 30% fica R$ {$salario}";
					}
					else{
						echo "Seu salário não há reajuste";
					}
				}
			?>
        </fieldset>
    </form>
</body>
</html>
