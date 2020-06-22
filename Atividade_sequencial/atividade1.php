<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Exercicio 1</title>
<style>
	form, #blocoPhp{width:300px; margin:10px auto;}
	label{display:inline-block; line-height:0.8cm;}
	input[type=submit]{margin-top:10px;margin-left:100px; padding:10px; border-radius:5px; background-color:#fff; border:1px solid #ccc;}
	input[type=submit]:hover{cursor:pointer; border:1px solid #000; box-shadow:0 0 3px #000;}
	#botao{
		display:none;
	}
</style>
<script type="text/javascript">
	window.onload = function(){
		var salario1 = document.getElementById("salario");	//pegando um elemento pelo id
		var btn = document.getElementById("botao");
		salario1.onkeydown = function(){	//criando uma função
			btn.style.display="block";
		}
	}
</script>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>">
    	<fieldset>
            <label>Informe seu salário:</label>
            <input type="text" name="salario" id="salario" autofocus/>
            <br/>
            
            <input type="submit" name="enviar" value="Enviar" id="botao"/>
        </fieldset>
    </form>
    <section id="blocoPhp">
    	<?php
			if(isset($_GET["enviar"])){
				$salario = $_GET["salario"];
				$novoSalario = $salario + ($salario*0.2);
				echo"Seu salário é {$salario} e seu novo salário é {$novoSalario}";
			}
		?>
    </section>
</body>
</html>