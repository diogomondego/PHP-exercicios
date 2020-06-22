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
		var refresco1 = document.getElementById("refresco");
		var btn = document.getElementById("botao");
		refresco1.onkeydown = function(){
			btn.style.display="block";
		}
	}
</script>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>">
    	<fieldset>
            <label>Quantos litros de refresco você deseja?</label>
            <input type="text" name="refresco" id="refresco" autofocus/>
            <br/>
            
            <input type="submit" name="enviar" value="Enviar" id="botao"/>
        </fieldset>
    </form>
    <section id="blocoPhp">
    	<?php
			if(isset($_GET["enviar"])){
				$refresco = $_GET["refresco"];
				$agua = $refresco*0.8;
				$suco = $refresco*0.2;
				echo "São necessários {$agua} litro(s) de água e {$suco} litro(s) de suco para se ter {$refresco} litro(s) de refresco";
			}
		?>
    </section>
</body>
</html>