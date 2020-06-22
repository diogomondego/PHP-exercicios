<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Exercicio 2.4</title>
<style>
	form, #blocoPhp{width:300px; margin:10px auto;}
	label{display:inline-block; line-height:0.8cm;}
	input[type=submit]{margin-top:10px;margin-left:100px; padding:10px; border-radius:5px; background-color:#fff; border:1px solid #ccc;}
	input[type=submit]:hover{cursor:pointer; border:1px solid #000; box-shadow:0 0 3px #000;}
	#botao, #valorB{
		display:none;
	}
</style>
<script type="text/javascript">
	window.onload = function(){
		var a = document.getElementById("a");
		var b = document.getElementById("valorB");
		var btn = document.getElementById("botao");
		a.onkeydown = function(){
			b.style.display="block";
		}
		b.onkeydown = function(){
			btn.style.display="block";
		}
	}
</script>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>">
    	<fieldset>
            <label>Informe o valor A:</label>
            <input type="text" name="a" id="a" autofocus/>
            <br/>
            <div id="valorB">
            <label>Informe o valor B:</label>
            <input type="text" name="b" id="b"/>
            </div>
            <br/>            
            <input type="submit" name="enviar" value="Enviar" id="botao"/>
        </fieldset>
    </form>
    <section id="blocoPhp">
    	<?php
			if(isset($_GET["enviar"])){
				$a = $_GET["a"];
				$b = $_GET["b"];
				$c = $_GET["a"];
				$a = $b;
				$b = $c;
				echo "O valor de A é {$a}<br/> O valor de B é {$b}";
			}
		?>
    </section>
</body>
</html>