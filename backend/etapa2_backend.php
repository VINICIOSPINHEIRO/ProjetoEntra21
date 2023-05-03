<?php 
	
	// CONEXÃO COM O BANCO DE DADOS
	require_once('include/conexao.php');

	session_start();

	//RECUPERAR VIA GET A AREA DO CORPO SELECIONADA
	if (isset($_GET['area'])) {
		$area = $_GET['area'];
	} else {
		header('Location: erros.php');
	}

	// CONTA AS PAGINAS DE SINTOMAS APRESENTADOS
	if (isset($_GET['step'])) {
		$step = $_GET['step'];
	} else {
		$step = 1;
	}

	$new_arr = array();
	foreach($_SESSION['opcao_selec'] as $r){
		$new_arr[] = $r;
	}

	$sql = "SELECT * FROM tb_sintomas WHERE id = '".$new_arr[$step-1]."'";
	$querySintomas = mysqli_query($con, $sql);
	$resultado = mysqli_fetch_assoc($querySintomas);

	if ($step == 1) {
		$urlVoltar = "etapa1.php?area=".$area."&step=2";
	} else {
		$urlVoltar = "etapa2.php?area=".$area."&step=". ($step - 1);
	}

	$sql = "SELECT * FROM tb_respostas";
	$queryResp = mysqli_query($con, $sql);

	$contador = count($_SESSION['opcao_selec']);





?>