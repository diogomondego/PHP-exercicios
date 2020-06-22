<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Atividade 1.3</title>
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
        <h3>Menu de Lanches</h3>
        <form>
        	<fieldset>
            <legend>Opções</legend>
            	<h5>1 - X-Tudo + Refri R$ 10,99</h5>
                <h5>2 - Sanduiche Natural + Suco R$ 7,90</h5>
                <h5>3 - Super X-Bacon + Refri + Fritas R$ 15,90</h5>
                <h5>4 - Mega Hamburguer + Milk Shake + Fritas R$ 16,90</h5>
                <h5>5 - Mega X-Tudo + Refri + Fritas R$18,00</h5>
            </fieldset>
        </form>
        <form action="<?php $_SERVER['PHP_SELF']?>"><!--esse comando do php envia o form para ele mesmo-->
            <fieldset>
            	<label for="x">Digite a opção de lanche</label>
                <input type="number" name="x" id="x" autofocus/>
                <br/>
                <label for="x">Digite a quantidade do lanche</label>
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
						echo "Opção {$x}: X-Tudo + Refri <br/> Valor: R$". 10.99 * $y;
						break;
					case 2:
						echo "Opção {$x}: Sanduiche Natural + Suco <br/> Valor: R$". 7.90 * $y;
						break;
					case 3:
						echo "Opção {$x}: Super X-Bacon + Refri + Fritas <br/> Valor: R$". 15.90 * $y;
						break;
					case 4:
						echo "Opção {$x}: Mega Hamburguer + Milk Shake + Fritas <br/> Valor: R$". 16.90 * $y;
						break;
					case 5:
						echo "Opção {$x}: Mega X-Tudo + Refri + Fritas <br/> Valor: R$". 18 * $y;
						break;
					default:
						echo "Opção inválida";
				}
			}
		?>
    </section>
</body>
</html>