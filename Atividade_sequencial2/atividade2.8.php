<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Exercicio 2.8</title>
<style>
	form, #blocoPhp{width:300px; margin:10px auto;}
	label{display:inline-block; line-height:0.8cm;}
	input[type=submit]{margin-top:10px;margin-left:100px; padding:10px; border-radius:5px; background-color:#fff; border:1px solid #ccc;}
	input[type=submit]:hover{cursor:pointer; border:1px solid #000; box-shadow:0 0 3px #000;}
	#botao, #altura{
		display:none;
	}
</style>
<script type="text/javascript">
	window.onload = function(){
		var kg = document.getElementById("kg");
		var a = document.getElementById("altura");
		var btn = document.getElementById("botao");
		kg.onkeydown = function(){
			a.style.display="block";
		}
		a.onkeydown = function(){
			btn.style.display="block";
		}
	}
</script>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>">
    	<fieldset>
            <label>Informe seu peso em quilos:</label>
            <input type="text" name="kg" id="kg" autofocus/>
            <br/>
            <div id="altura">
            <label>Informe sua altura em metros:</label>
            <input type="text" name="m" id="m" autofocus/>
            </div>
            <br/>            
            <input type="submit" name="enviar" value="Enviar" id="botao"/>
        </fieldset>
    </form>
    <section id="blocoPhp">
    	<?php
			if(isset($_GET["enviar"])){
				$kg = $_GET["kg"];
				$m = $_GET["m"];
				$imc = $kg/($m*$m);
				echo "Seu IMC é de {$imc}";
			}
		?>
    </section>
</body>
</html>