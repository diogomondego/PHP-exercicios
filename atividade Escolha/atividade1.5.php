<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Atividade 1.5</title>
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
        <h3>Boleto</h3>
        <form action="<?php $_SERVER['PHP_SELF']?>"><!--esse comando do php envia o form para ele mesmo-->
            <fieldset>
                <label for="x">Digite o código do produto</label>
                <input type="number" name="x" id="x" autofocus/>
                <br/>
                <label for="y">Digite a quantidade comprada</label>
                <input type="number" name="y" id="y"/>
                <br/>
                <input type="submit" name="enviar" value="Enviar"/>
            </fieldset>
        </form>
    </section>
    <section id="bloco_php">
    	<?php
			//testar se o form foi enviado
			if(isset($_GET["enviar"])){
				$x = $_GET["x"];
				$y = $_GET["y"];
				switch($x){
					case 1:
						$z = 5.32 * $y;
						echo "5.32 x {$y} = {$z}";
						break;
					case 2:
						$z = 6.45 * $y;
						echo "6.45 x {$y} = {$z}";
						break;
					case 3:
						$z = 2.37 * $y;
						echo "2.37 x {$y} = {$z}";
						break;
					default:
						echo "Operação inválida";
				}
			}
		?>
    </section>
</body>
</html>