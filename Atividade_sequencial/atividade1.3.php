<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Exercicio 1.3</title>
<style>
	form, #blocoPhp{width:300px; margin:10px auto;}
	label{display:inline-block; line-height:0.8cm;}
	input[type=submit]{margin-top:10px;margin-left:100px; padding:10px; border-radius:5px; background-color:#fff; border:1px solid #ccc;}
	input[type=submit]:hover{cursor:pointer; border:1px solid #000; box-shadow:0 0 3px #000;}
	#blocoSaida, #botao, #blocoMin, #blocoMin2{
		display:none;
	}
</style>
<script type="text/javascript">
	window.onload = function(){
		var entrada1 = document.getElementById("entrada");
		var saida1 = document.getElementById("blocoSaida");
		var min1 = document.getElementById("blocoMin");
		var min2 = document.getElementById("blocoMin2");
		var btn = document.getElementById("botao");
		entrada1.onkeydown = function(){
			min1.style.display="block";
		}
		min1.onkeydown = function(){
			saida1.style.display="block";
		}
		saida1.onkeydown = function(){
			min2.style.display="block";
		}
		min2.onkeydown = function(){
			btn.style.display="block";
		}
	}
</script>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>">
    	<fieldset>
            <label>Informe a hora de entrada:</label>
            <input type="text" name="entrada" id="entrada" autofocus/>
            <br/>
            <div id="blocoMin">
                 <label>Informe o minuto de entrada:</label>
                <input type="text" name="minEntrada" id="minEntrada"/>
            </div>
            <br/>
            <div id="blocoSaida">
                <label>Informe a hora de saída:</label>
                <input type="text" name="saida" id="saida"/>
            </div>
            <br/>
            <div id="blocoMin2">
                 <label>Informe o minuto de saída:</label>
                <input type="text" name="minSaida" id="minSaida"/>
            </div>
            <br/>
            <input type="submit" name="enviar" value="Enviar" id="botao"/>
        </fieldset>
    </form>
    <section id="blocoPhp">
    	<?php
			if(isset($_GET["enviar"])){
				$entrada = $_GET["entrada"];
				$minEnt = $_GET["minEntrada"];
				$saida = $_GET["saida"];
				$minSaida = $_GET["minSaida"];
				$durHora = $saida - $entrada;
				$durMin = $minSaida - $minEnt;
				echo "O tempo de duração foi {$durHora}:{$durMin}";
			}
		?>
    </section>
</body>
</html>
