<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Atividade 1.2</title>
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
        <h3>Meses</h3>
        <form action="<?php $_SERVER['PHP_SELF']?>"><!--esse comando do php envia o form para ele mesmo-->
            <fieldset>
                <label for="x">Digite o número correspondente ao mês</label>
                <input type="text" name="x" id="x" autofocus/>
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
				switch($x){
					case 1:
						echo "Mês {$x} = Janeiro";
						break;
					case 2:
						echo "Mês {$x} = Fevereiro";
						break;
					case 3:
						echo "Mês {$x} = Março";
						break;
					case 4:
						echo "Mês {$x} = Abril";
						break;
					case 5:
						echo "Mês {$x} = Maio";
						break;
					case 6:
						echo "Mês {$x} = Junho";
						break;
					case 7:
						echo "Mês {$x} = Julho";
						break;
					case 8:
						echo "Mês {$x} = Agosto";
						break;
					case 9:
						echo "Mês {$x} = Setembro";
						break;
					case 10:
						echo "Mês {$x} = Outubro";
						break;
					case 11:
						echo "Mês {$x} = Novembro";
						break;
					case 12:
						echo "Mês {$x} = Dezembro";
						break;
					default:
						echo "Mês inválido";
				}
			}
		?>
    </section>
</body>
</html>