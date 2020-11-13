<?php
	if (isset($_POST["idade"])) {
		if (is_numeric($_POST["idade"])) {
		
	
			$idade=$_POST["idade"];
			
			if($idade >=0 && $idade<18){
				menor($idade);
			}
			elseif ($idade>=18 && $idade<=100) {
				maior($idade);
			}
			elseif($idade >100){
				dinossauro();
			}
			else{
				echo 'Idade invalida';
			}


		}
		else{
		echo 'ERROR!!!!';
		}
	}
	
	function menor($idade){
		echo 'Você tem ' .$idade. ' é menor de idade';
	}

	function maior($idade){
		echo 'Você tem ' .$idade. ' é maior de idade';
	}

	function dinossauro(){
		echo 'Você é um dinossauro';
	}
?>