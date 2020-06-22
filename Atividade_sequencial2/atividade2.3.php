<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Exercicio 2.3</title>
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
		var raio = document.getElementById("r");
		var altura = document.getElementById("altura");
		var btn = document.getElementById("botao");
		raio.onkeydown = function(){
			altura.style.display="block";
		}
		altura.onkeydown = function(){
			btn.style.display="block";
		}
	}
</script>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>">
    	<fieldset>
            <label>Informe o raio R:</label>
            <input type="text" name="r" id="r" autofocus/>
            <br/>
            <div id="altura">
            <label>Informe a altura A:</label>
            <input type="text" name="a" id="a"/>
            </div>
            <br/>            
            <input type="submit" name="enviar" value="Enviar" id="botao"/>
        </fieldset>
    </form>
    <section id="blocoPhp">
    	<?php
			if(isset($_GET["enviar"])){
				$r = $_GET["r"];
				$a = $_GET["a"];
				$v = 3.14159*($r*$r)*$a;
				echo "O volume da lata de óleo é {$v}";
			}
		?>
    </section>
</body>
</html>