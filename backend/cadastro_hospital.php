<?php 

require_once('include/conexao.php');

	// Recuperar ID do usuario
if (isset($_GET['id'])) {
	$id_usuario = $_GET['id'];
}

	// Buscar informações do usuario
if (isset($id_usuario)) {
	$sql = "SELECT * FROM tb_hospital WHERE id = $id_usuario";
	$queryUsuario = mysqli_query($con, $sql);
	$resultadoUsuario = mysqli_fetch_array($queryUsuario);

		// Verificar se o usuario existe
	if (is_null($resultadoUsuario)) {
		die("Usuario não encontrado.");
	}
}

	// Verificando ação de CADASTRAR
if (isset($_POST['btnSalvar'])) {
		// Recebimento dos campos
	$nome = $_POST['nome_hosp'];
	$telefone = $_POST['telefone'];
	$cidade = $_POST['cidade'];


		// Verifica se é edição ou cadastro de usuario
	if (isset($id_usuario)) {
		$sql = "UPDATE tb_hospital SET nome = '$nome', telefone = '$telefone', cidade = '$cidade' WHERE id = $id_usuario";
	} else {
		$sql = "INSERT INTO tb_hospital VALUES (DEFAULT, '$nome', '$telefone', '$cidade')";
	}

	if (mysqli_query($con, $sql)) {
		header('Location: hospital_painel.php');
	} else {
		die("Erro!!!");
	}
}

	// Verificando ação de EXCLUIR
if (isset($_POST['btnExcluir'])) {
	$sql = "DELETE FROM tb_hospital WHERE id = $id_usuario";

	if (mysqli_query($con, $sql)) {
		header('Location: hospital_painel.php');
	} else {
		die("Erro!!!");
	}
}	



?>