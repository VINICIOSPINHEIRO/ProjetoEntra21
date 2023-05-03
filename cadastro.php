<?php 
require_once('backend/cadastro_usuarios.php');
require_once('include/conexao.php');




?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edição de Usuarios</title>
	<script src="include/3b47dd4ac9.js"></script>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="include/bootstrap.min.css">
	<link rel="shortcut icon" type="image/x-icon" href="media/images/4232logo__.ico">
	<link rel="stylesheet" type="text/css" href="media/css/media.css">
</head>
<body>
	
	<!-- HEADER -->
	<?php require_once('include/header.php');  ?>

	<!-- imagem de fundo -->
	<div class="shadow img_sobre" style="background-image: url('media/images/fundo.jpg');  min-height: 320px; min-width: 100%; background-size: 100%; background-position: center center; padding-top: 128px; margin-top: -184px; background-repeat: no-repeat;">
		<div class="text-center my-5"></div> 
	</div>

	<!-- CONTEÚDO DA PÁGINA -->

	<div class="container-fluid">
		<div class="container" style="margin-top: -190px;">
			<h1 class="text-center" style="font-size: 50px;color: rgb(59, 67, 69); font-weight: 200; margin-top: 50px;">Edição</h1>
			<div class="card mt-3 mb-3">
				<div class="card-body">
					<form method="post" action="" name="formCadastro">
						<label for="nome">Nome Completo:<strong class="text-danger"> *</strong></label>
						<input type="text" name="nome" id="nome" placeholder="Gabriel de Souza" class="form-control" value="<?=$resultadoUsuario['nome_completo']?>"><br>

						<label for="email">Email:<strong class="text-danger"> *</strong></label>
						<input type="email" name="email" id="email" class="form-control" value="<?=$resultadoUsuario['email']?>"><br>

						<label for="dataNasc">Data de Nascimento: <strong class="text-danger"> *</strong></label>
						<input type="date" name="dataNasc" id="dataNasc" class="form-control" value="<?=$resultadoUsuario['data_nascimento']?>"><br>

						<label for="sexo">Sexo: <strong class="text-danger"> *</strong></label>
						<select class="form-control" name="sexo" id="sexo">
							<option value="Masculino"<?= ($resultadoUsuario['sexo']=="Masculino") ? 'selected' : ''?>>Masculino</option>
							<option value="Feminino"<?= ($resultadoUsuario['sexo']=="Feminino") ? 'selected' : ''?>>Feminino</option>
						</select><br>

						<label for="senha">Senha: <strong class="text-danger"> *</strong></label>
						<input type="password" name="senha" id="senha" class="form-control" value="<?=$resultadoUsuario['senha']?>"><br>

						<label for="confSenha">Confirmar Senha: <strong class="text-danger"> *</strong></label>
						<input type="password" name="confSenha" id="confSenha" class="form-control"><br>

						<input type="submit" name="cadastro" id="cadastro" class="btn btn-primary " value="   Editar   ">
						<input type="submit" name="btnExcluir" value="   Excluir  " class="btn btn-danger">
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- FOOTER -->
	<?php require_once('include/footer.php'); ?>

	<!-- BOOTSTRAP -->
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
	<script src="include/jquery-3.3.1.slim.min.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
	<script src="include/popper.min.js"></script>
	<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
	<script src="include/bootstrap.min.js"></script>
	<script src="media/js/cadastro.js"></script>
</body>
</html>