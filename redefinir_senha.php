<?php 
	require_once('backend/backend_recupera_senha.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Redefinir Senha</title>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="include/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="media/css/nova_senha.css">
</head>
<body>
	<div class="text-center pt-5">
		<img src="media/images/logo__.png">
	</div>
	<div class="container pt-5 text-center">
		<form class="" method="post" action="">
			<div class="form-group corpo">
				<label for="senha">Sua nova senha</label>
				<input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua nova senha">

				<label for="redefSenha" class="mt-3">Confirme sua senha</label>
				<input type="password" class="form-control" id="redefSenha" name="redefSenha" placeholder="Confirme sua senha">
			</div>
			<button type="submit" name="redefinir" class="btn btn-primary">Redefinir Senha</button>
		</form>
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