<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Atividade 1.6</title>
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
            	<label for="x">Digite seu salário</label>
                <input type="number" name="x" id="x" autofocus/>
                <br/>
                <label for="y">Digite seu cargo</label>
                <input type="text" name="y" id="y"/>
                <br/>
                <label for="z">Digite seu código de funcionário</label>
                <input type="number" name="z" id="z"/>
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
				$z = $_GET["z"];
				switch($z){
					case 101:
						$t =  $x + ($x * 0.1);
						$d = $t - $x;
						echo "Salário antigo: R$ {$x} <br/> Novo salário: R$ {$t} <br/> Diferença: R$ {$d}";
						break;
					case 102:
						$t =  $x + ($x * 0.2);
						$d = $t - $x;
						echo "Salário antigo: R$ {$x} <br/> Novo salário: R$ {$t} <br/> Diferença: R$ {$d}";
						break;
					case 103:
						$t =  $x + ($x * 0.3);
						$d = $t - $x;
						echo "Salário antigo: R$ {$x} <br/> Novo salário: R$ {$t} <br/> Diferença: R$ {$d}";
						break;
					case 104:
						$t =  $x + ($x * 0.15);
						$d = $t - $x;
						echo "Salário antigo: R$ {$x} <br/> Novo salário: R$ {$t} <br/> Diferença: R$ {$d}";
						break;
					default:
						$t =  $x + ($x * 0.4);
						$d = $t - $x;
						echo "Salário antigo: R$ {$x} <br/> Novo salário: R$ {$t} <br/> Diferença: R$ {$d}";
				}
			}
		?>
    </section>
</body>
</html>