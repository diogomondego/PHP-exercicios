<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Atividade 1.1</title>
</head>

<body>
	<form>
    	<fieldset>
        	<label>Informe o número:</label><br/>
            <input type="text" name="numero"/>
            <br/>
            <input type="submit" name="enviar" value="Enviar"/>
            <?php
				if(isset($_GET["enviar"])){
					$numero = $_GET["numero"];
					if($numero >= 100 && $numero <= 200){
						echo "Este valor está entre 100 e 200";
					}
					else{
						echo "Este valor não está entre 100 e 200";
					}
				}
			?>
        </fieldset>
    </form>
</body>
</html>
