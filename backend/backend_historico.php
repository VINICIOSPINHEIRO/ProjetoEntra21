<?php 
	require_once('include/conexao.php');
	session_start();

	$id_hist = $_SESSION['id_usuario'];

	// RECUPERA AS CONSULTAS ANTERIORES
	$sql = "SELECT h.*, a.area_medica AS area, p.parte_corpo AS parte FROM tb_historico h
			JOIN tb_area_medica a ON a.id = h.fk_am
			JOIN tb_partes_corpo p ON p.id = h.fk_parte
			WHERE fk_id_usuario = '$id_hist'";
	$queryConsulta = mysqli_query($con, $sql);



	// MOSTRA AS INFORMAÇÕES DO MEDICO RECOMENDADO PARA O USUARIO
	if (isset($_GET['id_consulta'])) {
		$id_consulta = $_GET['id_consulta'];
		$id_deletar = $_GET['id_consulta'];
	}

	$sqlTipo = "SELECT * FROM tb_historico
				WHERE id = '$id_consulta'";
	$queryTipo = mysqli_query($con, $sqlTipo);
	$resultTipo = mysqli_fetch_array($queryTipo);

	$tipo = $resultTipo['fk_tipo'];
	

	$sqlHistorico = "SELECT m.*, a.area_medica AS area, h.nome AS hospital, i.tipo_incomodo AS tipo FROM tb_medicos m
			JOIN tb_area_medica a ON a.id = m.fk_am
			JOIN tb_hospital h ON h.id = m.fk_hospital
			JOIN tb_tipos_incomodo i ON i.fk_am = a.id
			WHERE i.id = '$tipo'";
	$queryHistorico = mysqli_query($con, $sqlHistorico);

	// Verificando ação de EXCLUIR
	if (isset($_POST['btnExcluirFoda'])) {
		$sqlExcluir = "DELETE FROM tb_historico WHERE id = '$id_deletar'";

		if (mysqli_query($con, $sqlExcluir)) {
			header('Location: historico.php');
		} else {
			die("Erro!!!");
		}
	}
?>