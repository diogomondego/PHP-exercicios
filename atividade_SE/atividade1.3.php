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
            <label>Informe seu financiamento:</label><br/>
            <input type="text" name="financiamento"/>
            <br/>
            <input type="submit" name="enviar" value="Enviar"/>
            <?php
				if(isset($_GET["enviar"])){
					$salario = $_GET["salario"];
					$financiamento = $_GET["financiamento"];
					if($financiamento <= 5*$salario){
						echo "Financiamento concebido";
					}
					else{
						echo "Financiamento negado";
					}
					echo "<br/>Obrigado por nos consultar";
				}
			?>
        </fieldset>
    </form>
</body>
</html>
