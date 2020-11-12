<?php
	if (isset($_POST["n1"])&& isset($_POST["n2"])) {
		if (is_numeric($_POST["n1"])&& is_numeric($_POST["n2"])) {


			$n1=$_POST["n1"];
			$n2=$_POST["n2"];


			$operacao=$_POST["operacao"];


			if ($operacao=='soma') {
				somar($n1,$n2);
			}
			elseif ($operacao=='subtracao') {
				subtracao($n1,$n2);
			}
			elseif ($operacao=='divisao') {
				divisao($n1,$n2);
			}
			else{
				multiplicacao($n1,$n2);
			}
		}
		else{
		echo 'ERROR!!!!';
		}
	}




	function somar($n1,$n2){
		$soma=$n1+$n2;
		echo $n1. ' + ' .$n2. ' = ' .$soma;
	}

	function subtracao($n1,$n2){
		$subtra=$n1-$n2;
		echo $n1. ' - ' .$n2. ' = ' .$subtra;
	}


	function divisao($n1,$n2){
		if ($n1==0||$n2==0) {
			echo 'ERROR!!!';
		}
		else{
		$divisao=$n1/$n2;
		echo $n1. ' / ' .$n2. ' = ' .$divisao;
		}
	}


	function multiplicacao($n1,$n2){
		$multip=$n1*$n2;
		echo $n1. ' x ' .$n2. ' = ' .$multip;
	}
?>