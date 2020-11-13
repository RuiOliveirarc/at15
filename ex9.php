<?php
	if (isset($_POST["chb_valor"])) {
		
	
			$valor=$_POST["chb_valor"];
			
			if($valor==1){
				v1();
			}
			elseif ($valor==2) {
				v2();
			}
			elseif ($valor==3) {
				v3();
			}
			elseif ($valor==4) {
				v4();
			}
			else{
				v5();
			}
			

	}
	
	

	function v1(){
		echo 'Aluno MAU com nota de 1 valor';
	}

	function v2(){
		echo 'Aluno MEDIOCRE com nota de 2 valor';
	}

	function v3(){
		echo 'Aluno MÉDIA com nota de 3 valor';
	}

	function v4(){
		echo 'Aluno BOM com nota de 4 valor';
	}

	function v5(){
		echo 'Aluno MUITO BOM com nota de 5 valor';
	}
?>