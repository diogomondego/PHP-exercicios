<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Banco</title>
<style>
	form, #blocoPhp{width:300px; margin:10px auto;}
	label{display:inline-block; line-height:0.8cm;}
	input[type=submit]{margin-top:10px;margin-left:100px; padding:10px; border-radius:5px; background-color:#fff; border:1px solid #ccc;}
	input[type=submit]:hover{cursor:pointer; border:1px solid #000; box-shadow:0 0 3px #000;}
	#botao{
		display:none;
	}
</style>

</head>


	<?php
		$saldo=0;
		foreach($_POST as $chave => $campos){
		$$chave = $campos;
		if(empty($$chave)){
			header("location:banco.php?id=1");//Campos em branco
			die();
			}
		}
	?>

<body>	
	<form>
		<fieldset>
		<article id="dados_pessoais">
            <p>
            	<span class="dados">nome: </span><?=$nome?>	<br/>
                <span class="dados">Agência:</span><?=$agencia?>	<br/>
                <span class="dados">Conta-Corrente: </span><?=$conta?>	<br/>
                

            </p>
        </article>
        </fieldset>
    </form>
</body>
</html>
<?php
		if(isset($sacar)||isset($depositar)||isset($consultar)){
			
		if($chave == "consultar"){
			echo"Seu saldo é: R$ {$saldo},00";
			die();
		}
		if($valor<0){
			header("location:banco.php?id=3");//Saldo menor que valor
			die();
		}elseif($chave == "depositar"){
			$saldo+=$valor;
			echo "Voce depositou R$ {$valor},00";
		
		}
		if($valor>$saldo){
			header("location:banco.php?id=2");//Saldo menor que valor
				die();
			
			}elseif($chave == "sacar"){
				$saldo-=$valor;
				echo "Voce sacou R$ {$valor},00";
			}
		}


?>
<body>
	<a href="banco.php"><input type="submit" name="voltar" value="Voltar"/></a>
</body>
