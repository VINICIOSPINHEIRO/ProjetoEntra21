<?php

	session_start();

	if (!is_array($_SESSION['resp_selec'])){
		$_SESSION['resp_selec'] = array();
	}
	
	if (isset($_POST['id_resposta'])) {
			unset($_SESSION['resp_selec'][$_POST['id_sintoma']]);
			$_SESSION['resp_selec'][$_POST['id_sintoma']] = $_POST['id_resposta'];	
	}
	var_dump($_SESSION['resp_selec']);	
?>