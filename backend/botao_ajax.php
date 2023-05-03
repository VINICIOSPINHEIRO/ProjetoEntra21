<?php
	session_start();

	if (!is_array($_SESSION['opcao_selec'])){
		$_SESSION['opcao_selec'] = array();
	}
	
	if (isset($_POST['id'])) {
		if (in_array($_POST['id'], $_SESSION['opcao_selec'])){
			$posId = array_search($_POST['id'], $_SESSION['opcao_selec']);
			unset($_SESSION['opcao_selec'][$posId]);
			echo "removido";
		} else {
			$_SESSION['opcao_selec'][] = $_POST['id'];	
			echo "adicionado";
		}
	}
	var_dump($_SESSION['opcao_selec']);	
?>