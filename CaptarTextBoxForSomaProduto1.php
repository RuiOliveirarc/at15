<?php
	$soma=0;
	$Produto=1;
	if (count($_POST)) {
		if (is_numeric($_POST["rbt_valor"]) && $_POST["rbt_valor"]>=0) {
			
			$fim=$_POST["rbt_valor"];
			for ($i=1; $i<=$fim ; $i++) { 
				echo $i." ";
				$soma=$soma+$i;
				$Produto=$Produto*$i;
			}
			echo "<br>";
			echo "<br>";
			echo "Soma = ".$soma;
			echo "<br>";
			echo "<br>";
			echo "Produto = ".$Produto;

		}
		else{
		echo 'Introduza um valor numerico e positivo';
		}
	}
?>