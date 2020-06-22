<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Atividade 1.5</title>
</head>

<body>
	<form>
    	<fieldset>        	
            <label>Informe, em quilômetros, a distância do percurso:</label><br/>
            <input type="text" name="percurso"/>
            <br/>
            <label>Qual o tipo do seu carro?</label>
            <select name="carro">
            	<option value=""></option>
                <option value="carro1">Carro 1</option>
                <option value="carro2">Carro 2</option>
                <option value="carro3">Carro 3</option>
            </select>
            <br/>
            <input type="submit" name="enviar" value="Enviar"/>
            <?php
				if(isset($_GET["enviar"])){
					$carro = $_GET["carro"];
					$percurso = $_GET["percurso"];
					if($carro == "carro1"){
						$consumo = $percurso/8;
						echo "Consumo estimado de combustível: {$consumo}L para {$percurso}Km";
					}
					else if($carro == "carro2"){
						$consumo = $percurso/9;
						echo "Consumo estimado de combustível: {$consumo}L para {$percurso}Km";
					}
					elseif ($carro == "carro3"){
						echo "Consumo estimado de combustível: ".$percurso/12 ."L para {$percurso}Km";
					}
					else{
						echo"Opção de carro inválida";
					}
				}
			?>
        </fieldset>
    </form>
</body>
</html>
