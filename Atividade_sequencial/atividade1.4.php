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
	#botao, #blocoFazenda, #blocoCavalo{
		display:none;
	}
</style>
<script type="text/javascript">
	window.onload = function(){
		var nome1 = document.getElementById("nome");
		var fazenda1 = document.getElementById("blocoFazenda");
		var cavalo1 = document.getElementById("blocoCavalo");
		var btn = document.getElementById("botao");
		nome1.onkeydown = function(){
			fazenda1.style.display="block";
		}
		fazenda1.onkeydown = function(){
			cavalo1.style.display="block";
		}
		cavalo1.onkeydown = function(){
			btn.style.display="block";
		}
	}
</script>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>">
    	<fieldset>
            <label>Informe seu nome:</label>
            <input type="text" name="nome" id="nome" autofocus/>
            <br/>
            <div id="blocoFazenda">
                 <label>Informe o nome da fazenda:</label>
                <input type="text" name="fazenda" id="fazenda"/>
            </div>
            <br/>
            <div id="blocoCavalo">
                <label>Informe o total de cavalos:</label>
                <input type="text" name="cavalos" id="cavalos"/>
            </div>
            <br/>
            <input type="submit" name="enviar" value="Enviar" id="botao"/>
        </fieldset>
    </form>
    <section id="blocoPhp">
    	<?php
			if(isset($_GET["enviar"])){
				$fazenda = $_GET["fazenda"];
				$cavalos = $_GET["cavalos"];
				$ferradura = $cavalos*4;
				echo "A fazenda {$fazenda} possui {$cavalos} cavalos, a quantidade total de ferraduras para equipar todos os cavalos é: {$ferradura}";
			}
		?>
    </section>
</body>
</html>
