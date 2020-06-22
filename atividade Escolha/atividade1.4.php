<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Atividade 1.4</title>
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
        <h3>Menu de Compra</h3>
        <form action="<?php $_SERVER['PHP_SELF']?>"><!--esse comando do php envia o form para ele mesmo-->
        <fieldset>
            <legend>Opção de Pagamento</legend>
            	<input type="radio" name="opcao" value="1" id="1"><label for="1">Venda à vista</label><br/>
            	<input type="radio" name="opcao" value="2" id="2"><label for="2">Venda a prazo 30 dias</label><br/>
                <input type="radio" name="opcao" value="3" id="3"><label for="3">Venda a prazo 60 dias</label><br/>
                <input type="radio" name="opcao" value="4" id="4"><label for="4">Venda a prazo 90 dias</label><br/>
                <input type="radio" name="opcao" value="5" id="5"><label for="5">Venda no cartão de débito</label><br/>
                <input type="radio" name="opcao" value="6" id="6"><label for="6">Venda no cartão de débito</label><br/>
            </fieldset>
            <fieldset>
            	<label for="x">Digite o valor total da compra</label>
                <input type="number" name="x" id="x" autofocus/>
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
				$opcao = $_GET["opcao"];
				switch($opcao){
					case 1:
						$t =  $x - ($x * 0.15);
						echo "Valor total com desconto de 15%: R$ {$t}";
						break;
					case 2:
						$t =  $x - ($x * 0.10);
						echo "Valor total com desconto de 10%: R$ {$t}";
						break;
					case 3:
						echo "Valor total sem desconto: R$ {$x}";
						break;
					case 4:
						$t =  $x + ($x * 0.02);
						echo "Valor total com acréscimo de 2%: R$ {$t}";
						break;
					case 5:
						$t =  $x - ($x * 0.08);
						echo "Valor total com desconto de 8%: R$ {$t}";
						break;
					case 6:
						$t =  $x - ($x * 0.05);
						echo "Valor total com desconto de 5%: R$ {$t}";
						break;	
					default:
						echo "Opção inválida";
				}
			}
		?>
    </section>
</body>
</html>