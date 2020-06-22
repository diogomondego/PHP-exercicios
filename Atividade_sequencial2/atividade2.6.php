<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Exercicio 2.6</title>
<style>
	form, #blocoPhp{width:300px; margin:10px auto;}
	label{display:inline-block; line-height:0.8cm;}
	input[type=submit]{margin-top:10px;margin-left:100px; padding:10px; border-radius:5px; background-color:#fff; border:1px solid #ccc;}
	input[type=submit]:hover{cursor:pointer; border:1px solid #000; box-shadow:0 0 3px #000;}
	#botao, #real{
		display:none;
	}
</style>
<script type="text/javascript">
	window.onload = function(){
		var d = document.getElementById("d");
		var r = document.getElementById("real");
		var btn = document.getElementById("botao");
		d.onkeydown = function(){
			r.style.display="block";
		}
		r.onkeydown = function(){
			btn.style.display="block";
		}
	}
</script>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>">
    	<fieldset>
            <label>Informe a cotação do dolar:</label>
            <input type="text" name="d" id="d" autofocus/>
            <br/>
            <div id="real">
            <label>Quanto você quer converter de Dólar para Real?</label>
            <input type="text" name="r" id="r"/>
            </div>
            <br/>            
            <input type="submit" name="enviar" value="Enviar" id="botao"/>
        </fieldset>
    </form>
    <section id="blocoPhp">
    	<?php
			if(isset($_GET["enviar"])){
				$d = $_GET["d"];
				$r = $_GET["r"];
				$c = $d*$r;
				echo "O valor em Real fica R$ {$c}";
			}
		?>
    </section>
</body>
</html>