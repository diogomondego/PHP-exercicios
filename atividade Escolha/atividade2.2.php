<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Atividade 2.2</title>
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
        <h3>Cálculo</h3>
        <form action="<?php $_SERVER['PHP_SELF']?>"><!--esse comando do php envia o form para ele mesmo-->
            <fieldset>
            	<label for="x">Digite um valor X</label>
                <input type="number" name="x" id="x" autofocus/>
                <br/>
                <label>Calcular X em:</label><br/>
                <input type="radio" name="calcular" value="raiz" id="raiz"><label for="raiz">Raiz quadrada</label><br/>
                <input type="radio" name="calcular" value="metade" id="metade"><label for="metade">A metade</label><br/>
                <input type="radio" name="calcular" value="10%" id="10%"><label for="10%">10% de X</label><br/>
                <input type="radio" name="calcular" value="dobro" id="dobro"><label for="dobro">O dobro</label><br/>
                <input type="submit" name="enviar" value="Enviar"/>
            </fieldset>
        </form>
    </section>
    <section id="bloco_php">
    	<?php
			//testar se o form foi enviado
			if(isset($_GET["enviar"])){
				$x = $_GET["x"];
				$y = $_GET["calcular"];
				switch($y){
					case "raiz":
						$z =  sqrt($x);
						echo "Raiz quadrada de {$x} = {$z}";
						break;
					case "metade":
						$z =  $x / 2;
						echo "A metade de {$x} = {$z}";
						break;
					case "10%":
						$z =  $x * 0.1;
						echo "10% de {$x} = {$z}";
						break;
					case "dobro":
						$z =  $x * 2;
						echo "O dobro de {$x} = {$z}";
						break;
					default:
						echo "Operação inválida";
				}
			}
		?>
    </section>
</body>
</html>