<?php
	if (isset($_POST["n1"])&& isset($_POST["n2"]) && isset($_POST["n3"])&& isset($_POST["n4"])) {
		if (is_numeric($_POST["n1"])&& is_numeric($_POST["n2"]) && is_numeric($_POST["n3"])&& is_numeric($_POST["n4"])) {
		
	
			$n1=$_POST["n1"];
			$n2=$_POST["n2"];
			$n3=$_POST["n3"];
			$n4=$_POST["n4"];
			$soma=$n1+$n2+$n3+$n4;
			echo $n1. ' + ' .$n2. ' + ' .$n3. ' + ' .$n4. ' = ' .$soma;
		}
		else{
		echo 'ERROR!!!!';
		}
	}
	
?>