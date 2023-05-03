<?php 
	require_once('include/paginas_restritas.php');
	require_once('backend/backend_historico.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Histórico</title>
	<script src="include/3b47dd4ac9.js"></script>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="include/bootstrap.min.css">
	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:900&display=swap" rel="stylesheet"> -->
	<link rel="stylesheet" href="include/fonte.css">
	<link rel="stylesheet" type="text/css" href="media/css/etapa1.css">
	<link rel="stylesheet" type="text/css" href="media/css/medico.css">
</head>
<body class="bg-light">
	
	<!-- HEADER -->
	<?php 	
		require_once('include/header.php');
	?>

	<div class="container-fluid">
		<div class="container mb-5 pb-5">
			<div class="row">
				<div class="col-12 text-center">		
					<h2>Historico</h2>
				</div>
			</div>

			<?php while ($resultadoHistorico = mysqli_fetch_array($queryHistorico)) { ?>
				<div class="row">
			<hr style="background-color: rgb(168, 182, 186); width: 1000px; margin-top:50px; height: 1px; ">
			</div>
			<div class="media mt-4 ">
				<div class="media-body pl-5">
					<div class="ml-5">
						<h5>Informações do médico:</h5>
						<li>
							<i class="fas fa-user mt-1 mr-2"></i>
							<strong>Nome: </strong><?=$resultadoHistorico['nome']?>
						</li>

						<li class="mt-1">
							<i class="fas fa-user-md mr-2"></i>
							<strong>Especialidade: </strong><?=$resultadoHistorico['area']?>
						</li>

						<li class="mt-1">
							<i class="fas fa-hospital mr-2"></i>
							<strong>Local de Atuação: </strong><?=$resultadoHistorico['hospital']?>
						</li>

						<li class="mt-1">
							<i class="fas fa-at mr-1"></i>
							<strong>E-mail: </strong><?=$resultadoHistorico['email']?>
						</li>

						<li class="mt-1">
							<i class="fas fa-phone-alt mr-1"></i>
							<strong>Telefone: </strong><?=$resultadoHistorico['telefone']?>
						</li>
						<a href="medico.php" class="btn btn-secondary mt-3">Mais informações</a>

					</div>
				</div>
				<div class="mr-5 mt-2">
					<img  src="<?=$resultadoHistorico['nome_imagem']?>" class="img-fluid img_medico_etp3 d-none d-sm-block">
				</div>
			</div>	
			<?php } ?>
		</div>
				<form method="post" action="">
					<div class="text-center">	
						<a href="historico.php" class="btn btn-info">Voltar</a>
						<input type="submit" name="btnExcluirFoda" value="Excluir" class="btn btn-danger">
					</div>
				</form>
	</div>

	<!-- footer -->
	<?php require_once('include/footer.php'); ?>

	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
	<script src="include/jquery-3.3.1.slim.min.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
	<script src="include/popper.min.js"></script>
	<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
	<script src="include/bootstrap.min.js"></script>
</body>
</html>