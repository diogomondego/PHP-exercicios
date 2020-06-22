<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Exercicio 2.7</title>
<style>
	form, #blocoPhp{width:300px; margin:10px auto;}
	label{display:inline-block; line-height:0.8cm;}
	input[type=submit]{margin-top:10px;margin-left:100px; padding:10px; border-radius:5px; background-color:#fff; border:1px solid #ccc;}
	input[type=submit]:hover{cursor:pointer; border:1px solid #000; box-shadow:0 0 3px #000;}
	#botao, #seg{
		display:none;
	}
</style>
<script type="text/javascript">
	window.onload = function(){
		var m = document.getElementById("m");
		var s = document.getElementById("seg");
		var btn = document.getElementById("botao");
		m.onkeydown = function(){
			s.style.display="block";
		}
		s.onkeydown = function(){
			btn.style.display="block";
		}
	}
</script>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>">
    	<fieldset>
            <label>Informe a distância em metro:</label>
            <input type="text" name="m" id="m" autofocus/>
            <br/>
            <div id="seg">
            <label>Informe o tempo em segundo:</label>
            <input type="text" name="s" id="s" autofocus/>
            </div>
            <br/>            
            <input type="submit" name="enviar" value="Enviar" id="botao"/>
        </fieldset>
    </form>
    <section id="blocoPhp">
    	<?php
			if(isset($_GET["enviar"])){
				$m = $_GET["m"];
				$s = $_GET["s"];
				$v = ($m*1000)/($s*60);
				echo "A velocidade do projétil é de {$v}Km/m";
			}
		?>
    </section>
</body>
</html>