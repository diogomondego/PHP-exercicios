<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Exercicio 2.1</title>
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
		var c = document.getElementById("c");
		var btn = document.getElementById("botao");
		c.onkeydown = function(){
			btn.style.display="block";
		}
	}
</script>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>">
    	<fieldset>
            <label>Informe a temperatura em graus Celsius:</label>
            <input type="text" name="c" id="c" autofocus/>
            <br/>
            
            <input type="submit" name="enviar" value="Enviar" id="botao"/>
        </fieldset>
    </form>
    <section id="blocoPhp">
    	<?php
			if(isset($_GET["enviar"])){
				$c = $_GET["c"];
				$f = (9*$c+160)/5;
				echo "Convertendo em Farenheit fica: {$f}ºF";
			}
		?>
    </section>
</body>
</html>