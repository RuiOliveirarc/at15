<?php
	if (isset($_POST["ob"])) {
		if (is_numeric($_POST["ob"])) {
		
	
			$ob=$_POST["ob"];
			$venc=$ob*0.15;
			$cantina=$ob*0.10;
			$transporte=$ob*0.05;
			$valor=$ob-($venc+$cantina+$transporte);
			
			echo 'Tem que descontar:<br>' .$venc. ' para os inerentes aos vencidos,<br>' .$cantina. ' para a cantina, <br> '.$transporte. ' para o transporte<br> <br>';

			echo 'No final do mês vai ganhar ' .$valor;


		}
		else{
		echo 'ERROR!!!!';
		}
	}
	
?>