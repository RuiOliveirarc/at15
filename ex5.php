<?php
	if (isset($_POST["male"])&& isset($_POST["female"])) {
		if (is_numeric($_POST["male"])&& is_numeric($_POST["female"])) {

			$nmale=$_POST["male"];
			$nfemale=$_POST["female"];

			$nalunos=$nmale+$nfemale;

			$pmale=$nmale/$nalunos*100;

			$pfemale=$nfemale/$nalunos*100;

			echo 'Numero de alunos na turma '.$nalunos;

			echo '<br>';

			echo 'O percentagem de rapazes na turma é '.$pmale. '%';

			echo '<br>';

			echo 'O percentagem de raparigas na turma é '.$pfemale. '%';
		}
		else{
		echo 'ERROR!!!!';
		}
	}
?>