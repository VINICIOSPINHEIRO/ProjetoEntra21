<?php 
	require_once('include/conexao.php');
	require_once('backend/cadastro_hospital.php');
	require_once ('include/paginas_restritas.php'); 
	error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Hospital</title>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="include/bootstrap.min.css">
	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:900&display=swap" rel="stylesheet"> -->
	<link rel="stylesheet" href="include/fonte.css">
	<link rel="shortcut icon" type="image/x-icon" href="media/images/4232logo__.ico">
</head>
<body style="background-color: rgba(0,0,0,0.6);">
	
	<?php require_once('include/conexao.php'); ?>
	
	<div class="container-fluid">
		<div class="container">
			<h1 class="text-center mt-3 text-white">Cadastro seu Hospital</h1>
			<div class="card mt-3">
				<div class="card-body">
					<form method="post" action="" name="formCadastro">
						<label for="nome_hosp">Nome do Hospital</label>
						<input type="text" name="nome_hosp" id="nome_hosp" placeholder="Hospital" class="form-control" value="<?=$resultadoUsuario['nome']?>"><br>

						<label for="telefone">Telefone</label>
						<input type="text" name="telefone" id="telefone" class="form-control" placeholder="(47) 9898-9898" value="<?=$resultadoUsuario['telefone']?>"><br>

						<label for="cidade">Cidade</label>
						<input type="text" name="cidade" id="cidade" class="form-control" placeholder="Blumenau" value="<?=$resultadoUsuario['cidade']?>"><br>

						<input type="submit" name="btnSalvar" value="Salvar" class="btn btn-success">
						<input type="submit" name="btnExcluir" value="Excluir" class="btn btn-danger">
						<a href="hospital_painel.php" class="btn btn-dark">Voltar</a>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<!-- BOOTSTRAP -->
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
	<script src="include/jquery-3.3.1.slim.min.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
	<script src="include/popper.min.js"></script>
	<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
	<script src="include/bootstrap.min.js"></script>
</body>
</html>