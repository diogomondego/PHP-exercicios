<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Atividade 2.1</title>
<style>
	#lista, #bloco_php{
		width:310px; margin: 10px auto; border: 1px solid #000; border-radius: 10px;
	}
	#lista h3{
		text-align: center;
	}
	form{
		padding: 10px;
	}
	input[type=submit]{
		margin-top: 10px; margin-left: 100px; padding: 10px; border-radius: 10px; background-color: #FFF; border: 1px solid #999;
	}
	input[type=submit]:hover{
		cursor: pointer; border: 1px solid #000; box-shadow: 0 0 5px #000;
	}
</style>
</head>

<body>
	<section id="lista">
        <h3>Conversor</h3>
        <form action="<?php $_SERVER['PHP_SELF']?>"><!--esse comando do php envia o form para ele mesmo-->
            <fieldset>
            	<label for="x">Digite um valor em pés</label>
                <input type="number" name="x" id="x" autofocus/>
                <br/>
                <label>Converter em:</label><br/>
                <input type="radio" name="conversor" value="polegada" id="polegada"><label for="polegada">Polegadas</label>
                <input type="radio" name="conversor" value="jarda" id="jarda"><label for="jarda">Jardas</label>
                <input type="radio" name="conversor" value="milha" id="milha"><label for="milha">Milhas</label>
                <input type="submit" name="enviar" value="Enviar"/>
            </fieldset>
        </form>
    </section>
    <section id="bloco_php">
    	<?php
			//testar se o form foi enviado
			if(isset($_GET["enviar"])){
				$x = $_GET["x"];
				$y = $_GET["conversor"];
				switch($y){
					case "polegada":
						$z =  $x * 12;
						echo "{$x} pé(s) convertido em polegadas: {$z} polegadas";
						break;
					case "jarda":
						$z =  $x / 3;
						echo "{$x} pé(s) convertido em jardas: {$z} jardas";
						break;
					case "milha":
						$z =  $x / 5280;
						echo "{$x} pé(s) convertido em milhas: {$z} milhas";
						break;
					default:
						echo "Conversão inválida";
				}
			}
		?>
    </section>
</body>
</html>