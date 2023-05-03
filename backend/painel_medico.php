<?php 
	
	require_once('include/conexao.php');

	// Recuperar ID do usuario
	if (isset($_GET['id'])) {
		$id_usuario = $_GET['id'];
	}

	// Buscar informações do usuario
	if (isset($id_usuario)) {
		$sql = "SELECT * FROM tb_medicos WHERE id = $id_usuario";
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
		$nomeMedico = $_POST['nome_medico'];
		$telefone = $_POST['telefone'];
		$email = $_POST['email'];
		$areaMedica = $_POST['area_medica'];
		$hospital = $_POST['hospital'];
		$fomacao_1 = $_POST[ 'formacao_1'];
		$fomacao_2 = $_POST[ 'formacao_2'];
		$fomacao_3 = $_POST[ 'formacao_3'];
		$nome_imagem = $_POST[ 'nome_imagem'];


		// Verifica se é edição ou cadastro de usuario
		if (isset($id_usuario)) {
			$sql = "UPDATE tb_medicos SET nome = '$nomeMedico', telefone = '$telefone', email = '$email', fk_am = '$areaMedica', fk_hospital = '$hospital', formacao1 = '$fomacao_1', formacao2 = '$fomacao_2', formacao3 = '$fomacao_3', nome_imagem = '$nome_imagem' WHERE id = $id_usuario";
		} else {
			$sql = "INSERT INTO tb_medicos VALUES (DEFAULT, '$nomeMedico', '$telefone', '$email', '$areaMedica', '$hospital','$fomacao_1', '$fomacao_2', '$fomacao_3', '$nome_imagem')";
		}

		if (mysqli_query($con, $sql)) {
			header('Location: profissional.php');
		} else {
			die("Erro!!!");
		}
	}

	// Verificando ação de EXCLUIR
	if (isset($_POST['btnExcluir'])) {
		$sql = "DELETE FROM tb_medicos WHERE id = $id_usuario";

		if (mysqli_query($con, $sql)) {
			header('Location: profissional.php');
		} else {
			die("Erro!!!");
		}
	}	



?>