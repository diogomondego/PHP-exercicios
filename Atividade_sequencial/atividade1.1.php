<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Exercicio 1.1</title>
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
		var idade1 = document.getElementById("idade");
		var btn = document.getElementById("botao");
		idade1.onkeydown = function(){
			btn.style.display="block";
		}
	}
</script>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>">
    	<fieldset>
            <label>Informe sua idade:</label>
            <input type="text" name="idade" id="idade" autofocus/>
            <br/>
            
            <input type="submit" name="enviar" value="Enviar" id="botao"/>
        </fieldset>
    </form>
    <section id="blocoPhp">
    	<?php
			if(isset($_GET["enviar"])){
				$idade = $_GET["idade"];
				$mesIdade = $idade*12;
				$diaIdade = $idade*365;
				echo "Sua idade é {$idade}. <br/> Em meses é {$mesIdade} e em dias é {$diaIdade}";
			}
		?>
    </section>
</body>
</html>