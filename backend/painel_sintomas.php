<?php 
	
	require_once('include/conexao.php');

	// Recuperar ID do usuario
	if (isset($_GET['id'])) {
		$id_usuario = $_GET['id'];
	}

	// Buscar informações do usuario
	if (isset($id_usuario)) {
		$sql = "SELECT * FROM tb_sintomas WHERE id = $id_usuario";
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
		$sintoma = $_POST['sintoma'];

		// Verifica se é edição ou cadastro de usuario
		if (isset($id_usuario)) {
			$sql = "UPDATE tb_sintomas SET sintoma = '$sintoma' WHERE id = $id_usuario";
		} else {
			$sql = "INSERT INTO tb_sintomas VALUES (DEFAULT, '$sintoma')";
		}

		if (mysqli_query($con, $sql)) {
			header('Location: respostas.php');
		} else {
			die("Erro!!!");
		}
	}

	// Verificando ação de EXCLUIR
	if (isset($_POST['btnExcluir'])) {
		$sql = "DELETE FROM tb_sintomas WHERE id = $id_usuario";

		if (mysqli_query($con, $sql)) {
			header('Location: respostas.php');
		} else {
			die("Erro!!!");
		}
	}	



?>