<?php
require_once('include/conexao.php');

$consideravel = 0;
$desempate = 0;
$desconsideravel = 0;

$pesos = array();
$resultadoFinal = array();
$tipo = array();
	// CONVERTER AS RESPOSTAS PARA ID_SINTOMA E PESO
	foreach ($_SESSION['resp_selec'] as $id_sintoma => $id_resposta) {
		$sql = "SELECT * FROM tb_respostas WHERE id = '$id_resposta'";
		$queryPeso = mysqli_query($con, $sql);
		$resultPeso = mysqli_fetch_array($queryPeso);
		$pesos["$id_sintoma"] = $resultPeso['peso'];
		unset($sql);
	
}

	// BUSCAR TODAS AS POSSIVEIS DOENCAS PARA OS SINTOMAS CONVERTIDOS ACIMA
	foreach ($pesos as $id_sintoma => $peso) {
		$sql = "SELECT * FROM tb_ti_sin WHERE fk_sin = '$id_sintoma'";
		$queryTipo = mysqli_query($con, $sql);
		$resultTipo = mysqli_fetch_all($queryTipo, MYSQLI_ASSOC);	
		unset($sql);

	foreach ($resultTipo as $chave => $resultadoTipo) {
		$tipo[] = $resultTipo[$chave]['fk_ti'];
	}

}

	// removendo duplicidade
	$tipo = array_unique($tipo);

// percorrendo todos os possiveis tipos de incomodo
foreach ($tipo as $chave => $tipo_incomodo) {
	// percorrendo todas as respostas de sintomas, se o incomodo atual tiver o sintoma, entra na conta senao pula o sintoma
	foreach ($pesos as $id_sintoma => $peso) {
		$sql = "SELECT * FROM tb_ti_sin WHERE fk_sin = '$id_sintoma' AND fk_ti = '$tipo_incomodo'";
		$queryTipo = mysqli_query($con, $sql);
		$resultados = mysqli_num_rows($queryTipo);

		if ($resultados > 0) {
			if ($peso >= 64) {
				$consideravel += $peso;
			}

			if ($peso == 48) {
				$desempate += $peso;
			}

			if ($peso < 48) {
				$desconsideravel += $peso;
			}
		}

	}

	$resultadoFinal[$tipo_incomodo] = [
		'nr_sintoma_consideravel' => $consideravel,
		'nr_sintoma_desconsideravel' => $desconsideravel,
		'nr_sintoma_desempate' => $desempate
	];	

	$consideravel = 0;
	$desconsideravel = 0;
	$desempate = 0;

}

	$resultadoFinalDef = array();
	$maior = [
		'tipo_incomodo' => null,
		'peso' => 0
	];
	foreach ($resultadoFinal as $tipo_incomodo => $peso) {
		$subtracao = $resultadoFinal[$tipo_incomodo]['nr_sintoma_consideravel'] - $resultadoFinal[$tipo_incomodo]['nr_sintoma_desconsideravel'];
		if ($subtracao < 0) {
			$subtracao = 0;
		}

		$resultadoFinalDef["$tipo_incomodo"] = $subtracao;

		if ($maior['tipo_incomodo'] == null || $maior['peso'] < $subtracao) {
			$maior = [
				'tipo_incomodo' => $tipo_incomodo,
				'peso' => $subtracao
			];		
		}

		if ($maior['peso'] == $subtracao) {
			if ($resultadoFinal[$tipo_incomodo]['nr_sintoma_desempate'] > $resultadoFinal[$maior['tipo_incomodo']]['nr_sintoma_desempate']) {
					$maior = [
						'tipo_incomodo' => $tipo_incomodo,
						'peso' => $subtracao
					];	
			}
		}

	}

	// PUXANDO AS INFORMAÇÕES DOS MEDICOS PARA MOSTRAR NO RESULTADO FINAL
	$sqlMedicos = "SELECT m.*, a.area_medica AS area, h.nome AS hospital, i.tipo_incomodo AS tipo FROM tb_medicos m
			JOIN tb_area_medica a ON a.id = m.fk_am
			JOIN tb_hospital h ON h.id = m.fk_hospital
			JOIN tb_tipos_incomodo i ON i.fk_am = a.id
			WHERE i.id = '{$maior['tipo_incomodo']}'";
	$queryMedicos = mysqli_query($con, $sqlMedicos);

	// HISTÓRICO
	$historico = mysqli_fetch_array(mysqli_query($con, $sqlMedicos));
	$areaMedica = $historico['area'];
	$areaP = $_GET['area'];

	$sqlArea = "SELECT * FROM tb_area_medica WHERE area_medica = '$areaMedica'";
	$queryArea = mysqli_query($con, $sqlArea);
	$area = mysqli_fetch_array($queryArea);
	$areaMedica = $area['id'];
	
	if ($areaP == 'cabeca') {
		$areaP = 4;
	} else if ($areaP == 'braco') {
		$areaP = 1;
	} else if ($areaP == 'tronco') {
		$areaP = 3;
	} else if ($areaP == 'perna') {
		$areaP = 2;
	}

	$id_hist = $_SESSION['id_usuario'];
	$tipo_inco = $maior['tipo_incomodo'];

	if (isset($_POST['finaliza'])) {
		$sql = "INSERT INTO tb_historico VALUES (DEFAULT, '$areaMedica', '$areaP', '$id_hist', '$tipo_inco')";
		if (mysqli_query($con, $sql)) {
			unset($_SESSION['opcao_selec']);
			unset($_SESSION['resp_selec']);
			header('Location: index.php') or die('pau na kombi');
		} else {
			die("Erro!!!");
		}
	}

	$_SESSION['tipo'] = $tipo_inco;	
?>