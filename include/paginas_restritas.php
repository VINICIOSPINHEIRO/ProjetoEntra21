<?php
	// VERIFICAÇÃO DE PAGINA RESTRITA
	// Verificando se esta logado
	session_start();
	error_reporting(0);

	if (!(isset($_SESSION['logado']) && $_SESSION['logado']==true)) {
		header('Location: erros.php');
	}
?>