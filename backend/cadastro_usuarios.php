<?php

require_once('include/conexao.php');

	// Recuperar ID do usuario
if (isset($_GET['id'])) {
	$id_usuario = $_GET['id'];
}

	// Buscar informações do usuario
if (isset($id_usuario)) {
	$sql = "SELECT * FROM tb_usuario WHERE id = $id_usuario";
	$queryUsuario = mysqli_query($con, $sql);
	$resultadoUsuario = mysqli_fetch_array($queryUsuario);

		// Verificar se o usuario existe
	if (is_null($resultadoUsuario)) {
		die("Usuario não encontrado.");
	}
}

	// Verificando ação de CADASTRAR
if (isset($_POST['cadastro'])) {
		// Recebimento dos campos
	$nomeCompleto = $_POST['nome'];
	$emailUsuario = $_POST['email'];
	$dataNasc = $_POST['dataNasc'];
	$sexo = $_POST['sexo'];
	$senha = $_POST['senha'	];
	$token = $_POST['token'	];


		// Verifica se é edição ou cadastro de usuario
	if (isset($id_usuario)) {
		$sql = "UPDATE tb_usuario SET nome_completo = '$nomeCompleto', email = '$emailUsuario', data_nascimento = '$dataNasc', sexo = '$sexo', senha = '$senha', nivel_acesso = 'null' WHERE id = $id_usuario";
	} else {
		$sql = "INSERT INTO tb_usuario VALUES (DEFAULT, '$nomeCompleto', '$emailUsuario', '$dataNasc', '$sexo', '$senha', 'null', '$token')";
	}

	if (mysqli_query($con, $sql)) {
		header('Location: index.php');
	} else {
		die("Erro!!!");
	}
}

	// Verificando ação de EXCLUIR
if (isset($_POST['btnExcluir'])) {
	$sql = "DELETE FROM tb_usuario WHERE id = $id_usuario";

	if (mysqli_query($con, $sql)) {
		header('Location: backend/logoff.php');
	} else {
		die("Erro!!!");
	}
}			

?>