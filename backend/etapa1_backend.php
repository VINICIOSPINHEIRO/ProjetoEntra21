<?php
	
	// CONEXÃO COM O BANCO DE DADOS
	require_once('include/conexao.php');

	// RECUPERAR VIA GET A AREA DO CORPO SELECIONADA
	if (isset($_GET['area'])) {
		$area = $_GET['area'];
	} else {
		header('Location: erros.php');
	}

	// CONTA AS PAGINAS DE SINTOMAS APRESENTADOS
	if (isset($_GET['step'])) {
		$step = $_GET['step'];
	} else {
		$step = 0;
	}

	$sql = "SELECT s.sintoma AS sintoma, COUNT(*), s.id AS id FROM tb_ti_sin ti
				LEFT JOIN tb_sintomas s ON s.id = ti.fk_sin
				LEFT JOIN tb_tipos_incomodo i ON i.id = ti.fk_ti
				LEFT JOIN tb_partes_corpo p ON p.id = i.fk_parte_corpo ";

	//VERIFICAR A AREA DO CORPO SELECIONADA
	if ($area == 'cabeca') {
		$sql .= "WHERE i.fk_parte_corpo = 4";

	} else if ($area == 'braco') {
		$sql .= "WHERE i.fk_parte_corpo = 1";

	} else if ($area == 'tronco') {
		$sql .= "WHERE i.fk_parte_corpo = 3";

	} else if ($area == 'perna') {
		$sql .= "WHERE i.fk_parte_corpo = 2";
	}

	$sql .= " GROUP BY ti.fk_sin
			 ORDER BY COUNT(*) DESC, sintoma ASC";
			 
	if ($step == 0) {
		$sql .= " LIMIT 5";
	} else {
		$sql .= " LIMIT ".(($step*5) + 1).",5";
	}

		$querySintomas = mysqli_query($con, $sql);


	// GERAÇÃO DA VARIAVEL STEP
	if ($step == 0) {
		$urlVoltar = "consulta.php";
	} else {
		$urlVoltar = "etapa1.php?area=".$area."&step=". ($step - 1);
	}

	

?>