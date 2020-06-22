<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Atividade 2.2</title>
</head>

<body>
	<form>
    	<fieldset>
        	<label>Álcool ou gasolina?</label><br/>
            <select name="comb" autofocus>
            	<option value=""></option>
            	<option value="alcool">Álcool</option>
            	<option value="gasolina">Gasolina</option>
            </select>
            <br/>
            <label>Quantos litros de combustível?</label><br/>
            <input type="number" name="valor"/>
            <br/>
            <input type="submit" name="enviar" value="Enviar"/>
            <?php
				if(isset($_GET["enviar"])){
					$comb = $_GET["comb"];
					$valor = $_GET["valor"];
					if($comb == "alcool"){						
						if($valor <= 20){
							$valor *= 2.90;
							$valor = $valor-($valor*0.03); 
							echo "O valor total, com desconto de 3%, fica: R$ {$valor}";
						}
						else{
							$valor *= 2.90;
							$valor = $valor-($valor*0.05);
							echo "O valor total, com desconto de 5%, fica: R$ {$valor}";
						}
					}
					elseif($comb == "gasolina"){						
						if($valor <= 20){
							$valor *= 3.30;
							$valor = $valor-($valor*0.04); 
							echo "O valor total, com desconto de 4%, fica: R$ {$valor}";
						}
						else{
							$valor *= 3.30;
							$valor = $valor-($valor*0.06);
							echo "O valor total, com desconto de 6%, fica: R$ {$valor}";
						}
					}
					else{
						echo"Opção inválida";
					}
				}
			?>
        </fieldset>
    </form>
</body>
</html>
