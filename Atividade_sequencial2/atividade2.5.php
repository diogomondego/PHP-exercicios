<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Exercicio 2.5</title>
<style>
	form, #blocoPhp{width:300px; margin:10px auto;}
	label{display:inline-block; line-height:0.8cm;}
	input[type=submit]{margin-top:10px;margin-left:100px; padding:10px; border-radius:5px; background-color:#fff; border:1px solid #ccc;}
	input[type=submit]:hover{cursor:pointer; border:1px solid #000; box-shadow:0 0 3px #000;}
	#botao, #altura, #largura{
		display:none;
	}
</style>
<script type="text/javascript">
	window.onload = function(){
		var c = document.getElementById("c");
		var l = document.getElementById("largura");
		var a = document.getElementById("altura");
		var btn = document.getElementById("botao");
		c.onkeydown = function(){
			l.style.display="block";
		}
		l.onkeydown = function(){
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
            <label>Informe o Comprimento C:</label>
            <input type="text" name="c" id="c" autofocus/>
            <br/>
            <div id="largura">
            <label>Informe a Largura L:</label>
            <input type="text" name="l" id="l"/>
            </div>
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
				$c = $_GET["c"];
				$l = $_GET["l"];
				$a = $_GET["a"];
				$v = $c*$l*$a;
				echo "O volume da caixa retangular é {$v}";
			}
		?>
    </section>
</body>
</html>