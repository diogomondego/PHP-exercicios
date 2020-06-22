<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Atividade 1.1</title>
<style>
	#lista, #bloco_php{
		width:300px; margin: 10px auto; border: 1px solid #000; border-radius: 10px;
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
        <h3>Calculadora</h3>
        <form action="<?php $_SERVER['PHP_SELF']?>"><!--esse comando do php envia o form para ele mesmo-->
            <fieldset>
                <label for="x">Digite o número X</label>
                <input type="text" name="x" id="x" autofocus/>
                <br/>
                <label for="y">Digite o número Y</label>
                <input type="text" name="y" id="y"/>
                <br/>
                <input type="radio" name="calculo" value="adicao" id="adicao"/>	<label for="adicao">Adição</label><br/>
                <input type="radio" name="calculo" value="subtracao" id="subtracao"/>	<label for="subtracao">Subtração</label><br/>
                <input type="radio" name="calculo" value="multiplicacao"id="multiplicacao"/><label for="multiplicacao">Multiplicação</label><br/>
                <input type="radio" name="calculo" value="divisao" id="divisao"/>	<label for="divisao">Divisão</label><br/>
                
                <input type="submit" name="enviar" value="Enviar"/>
            </fieldset>
        </form>
    </section>
    <section id="bloco_php">
    	<?php
			//testar se o form foi enviado
			if(isset($_GET["enviar"])){
				$calculo = $_GET["calculo"];
				$x = $_GET["x"];
				$y = $_GET["y"];
				switch($calculo){
					case "adicao":
						$z = $x + $y;
						echo "{$x} + {$y} = {$z}";
						break;
					case "subtracao":
						$z = $x - $y;
						echo "{$x} - {$y} = {$z}";
						break;
					case "multiplicacao":
						$z = $x * $y;
						echo "{$x} x {$y} = {$z}";
						break;
					case "divisao":
						$z = $x / $y;
						echo "{$x} / {$y} = {$z}";
						break;
					default:
						echo "Operação inválida";
				}
			}
		?>
    </section>
</body>
</html>