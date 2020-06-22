<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Exercicio 1.4</title>
<style>
	form, #blocoPhp{width:300px; margin:10px auto;}
	label{display:inline-block; line-height:0.8cm;}
	input[type=submit]{margin-top:10px;margin-left:100px; padding:10px; border-radius:5px; background-color:#fff; border:1px solid #ccc;}
	input[type=submit]:hover{cursor:pointer; border:1px solid #000; box-shadow:0 0 3px #000;}
	#botao, #blocoLata2, #blocoLata3{
		display:none;
	}
</style>
<script type="text/javascript">
	window.onload = function(){
		var lata1 = document.getElementById("lata1");
		var lata2 = document.getElementById("blocoLata2");
		var lata3 = document.getElementById("blocoLata3");
		var btn = document.getElementById("botao");
		lata1.onkeydown = function(){
			lata2.style.display="block";
		}
		lata2.onkeydown = function(){
			lata3.style.display="block";
		}
		lata3.onkeydown = function(){
			btn.style.display="block";
		}
	}
</script>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>">
    	<fieldset>
            <label>Quantas latas de 350ml você deseja?</label>
            <input type="text" name="lata1" id="lata1" autofocus/>
            <br/>
            <div id="blocoLata2">
                 <label>Quantas garrafas de 600ml você deseja?</label>
                <input type="text" name="lata2" id="lata2"/>
            </div>
            <br/>
            <div id="blocoLata3">
                <label>Quantas garrafas de 2L você deseja?</label>
                <input type="text" name="lata3" id="lata3"/>
            </div>
            <br/>
            <input type="submit" name="enviar" value="Enviar" id="botao"/>
        </fieldset>
    </form>
    <section id="blocoPhp">
    	<?php
			if(isset($_GET["enviar"])){
				$lata1 = $_GET["lata1"];
				$lata2 = $_GET["lata2"];
				$lata3 = $_GET["lata3"];
				$litros = ($lata1*0.35) + ($lata2*0.6) + $lata3;
				echo "Você comprou {$litros} litros de refrigerante";
			}
		?>
    </section>
</body>
</html>
