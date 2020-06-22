<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Atividade 2.3</title>
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
        <h3>Cálculo de Aumento</h3>
        <form action="<?php $_SERVER['PHP_SELF']?>"><!--esse comando do php envia o form para ele mesmo-->
            <fieldset>
            	<label for="x">Quanto custou o produto?</label>
                <input type="number" name="x" id="x" autofocus/>
                <br/>
                <label for="y">Digite o código da categoria</label>
                <input type="text" name="y" id="y"/>
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
				switch($y){
					case 1:
						$t =  $x + ($x * 0.8);
						echo "Categoria: Hortifruti <br/> O produto custará: R$ {$t}";
						break;
					case 2:
						$t =  $x + ($x * 0.8);
						echo "Categoria: Laticíneos <br/> O produto custará: R$ {$t}";
						break;
					case 3:
						$t =  $x + ($x * 1);
						echo "Categoria: Carnes <br/> O produto custará: R$ {$t}";
						break;
					case 4:
						$t =  $x + ($x * 1);
						echo "Categoria: Peixes <br/> O produto custará: R$ {$t}";
						break;
					case 5:
						$t =  $x + ($x * 0.9);
						echo "Categoria: Aves <br/> O produto custará: R$ {$t}";
						break;
					case 6:
						$t =  $x + ($x * 0.9);
						echo "Categoria: Ovos <br/> O produto custará: R$ {$t}";
						break;
					default:
						echo "Código inválido";
				}
			}
		?>
    </section>
</body>
</html>