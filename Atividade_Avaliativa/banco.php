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
<body>
	<form action="recebe_dados.php" method="post" enctype="multipart/form-data">
    	<h1>Bem vindo ao Banco Tio Patinhas</h1>
        <?php
			if(isset($_GET["id"])){
				if($_GET["id"] == 1){
					echo "<p>Campos em Branco!</p>";
				}
				elseif($_GET["id"] == 2){
					echo "<p>Você não possui saldo disponivel, Por favor faça um deposito!</p>";
				}
				elseif($_GET["id"] == 3){
					echo "<p>Você digitou um valor negativo, Por favor digite outro valor!</p>";
				}
			}
		?>
    	<fieldset>
            <label>Informe seu Nome:</label>
            <input type="text" name="nome" />
            <br/>
            <label>Informe sua Agência:</label>
            <input type="text" name="agencia" />
            <br/>
            <label>Informe o número da sua Conta-Corrente:</label>
            <input type="text" name="conta"/>
            <br/>
            
            <label>Informe um valor:</label>
            <input type="text" name="valor"/>
            <br/>
            <input type="submit" name="sacar" value="Sacar" class="botao"/>
            <input type="submit" name="depositar" value="Depositar" class="botao"/>
            <input type="submit" name="consultar" value="Consultar Saldo" class="botao"/>
            

        </fieldset>
    </form>
</body>
</html>