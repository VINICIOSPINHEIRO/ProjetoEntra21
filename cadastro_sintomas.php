<?php 
	require_once('include/conexao.php');
	require_once('backend/painel_sintomas.php');
	require_once ('include/paginas_restritas.php'); 
	error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Sintomas</title>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="include/bootstrap.min.css">
	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:900&display=swap" rel="stylesheet"> -->
	<link rel="stylesheet" href="include/fonte.css">
	<link rel="shortcut icon" type="image/x-icon" href="media/images/4232logo__.ico">
</head>
<body style="background-color: rgba(0,0,0,0.6);">

	<?php require_once('include/conexao.php') ?>
	
	<div class="container-fluid">
		<div class="container">
			<h1 class="text-center mt-3 text-white">Cadastro de Sintomas</h1>
			<div class="card mt-3">
				<div class="card-body">
					<form method="post" action="" name="formCadastro">
						<label for="cod_sintoma">Cod. do Sintoma:</label>
						<input type="number" name="cod_sintoma" id="cod_sintoma" placeholder="Ex: 1" disabled class="form-control" value="<?=$resultadoUsuario['id']?>"><br>

						<label for="sintoma">Sintoma:</label>
						<input type="text" name="sintoma" id="sintoma" class="form-control" placeholder="Ex: Inchaço nos dedos" value="<?=$resultadoUsuario['sintoma']?>"><br>

						<input type="submit" name="btnSalvar" value="Salvar" class="btn btn-success">
						<input type="submit" name="btnExcluir" value="Excluir" class="btn btn-danger">
						<a href="respostas.php" class="btn btn-dark">Voltar</a>
					</form>
				</div>
			</div>
		</div>
	</div>


	<!-- BOOSTRAP -->
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
	<script src="include/jquery-3.3.1.slim.min.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
	<script src="include/popper.min.js"></script>
	<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
	<script src="include/bootstrap.min.js"></script>
</body>
</html>