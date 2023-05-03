<?php
	require_once('include/conexao.php');
	require_once('include/functions.php');

	if (isset($_POST['btnRedefinir'])) {
		// RECEBER O EMAIL DO USUARIO
		$email = $_POST['email'];

		// CRIANDO O TOKEN
		$token = substr(md5(time()), 0, 6);
		$novaSenha = md5(md5($token));

		// COLOCAR O TOKEN NO USUARIO
		$sqlToken = "UPDATE tb_usuario SET token = '$novaSenha' WHERE email = '$email'";
		$queryToken = mysqli_query($con, $sqlToken);
	
		$sql = "SELECT * FROM tb_usuario WHERE email = '$email'";
		$queryLogin = mysqli_query($con, $sql);
		$resultadoLogin = mysqli_fetch_array($queryLogin);

		$nome = $resultadoLogin['nome_completo'];

		$corpo = "<h1>Olá $nome </h1>";
		$corpo .= "<p>Para redefinir sua senha clique ";
		$corpo .= "<a href='http://localhost/php_vespertino/e21v-consulta/redefinir_senha.php/?token=$novaSenha'>aqui</a>.</p>";


		$envio = nova_senha($email, 'symfinder@gmail.com', 'Sistema de recuperação de senha', 'symfinder@gmail.com', 'Tenha uma boa consulta', $corpo);


	if ($envio == true) {
		echo "Contato enviado com successo!";
		header('Location: index.php');

	} else {
		echo "Erro ao enviar contato <br>";
		echo $envio;

	}
}


	if (isset($_GET['token'])) {
		$token = $_GET['token'];
	}

	if (isset($_POST['redefinir'])) {
		$senha = $_POST['senha'];
		$redefSenha = $_POST['redefSenha'];

		$sqlRedifinir = "UPDATE tb_usuario SET senha = '$senha', token = null WHERE token = '$token'";
		
		if (mysqli_query($con, $sqlRedifinir)) {
			header('Location: index.php');
		} else {
			die("Erro ao redefinir senha!!!");
		}


	}

?>