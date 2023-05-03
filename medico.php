<?php 
	require_once('include/conexao.php');
	require_once('include/paginas_restritas.php');
	require_once('backend/pagina_medico.php');
	// require_once('backend/painel_medico.php');
	error_reporting(0);

	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Médico</title>
	<link rel="stylesheet" type="text/css" href="media/css/medico.css">
	<link rel="stylesheet" type="text/css" href="media/css/sobre.css">
	<link rel="stylesheet" type="text/css" href="media/css/media.css">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="include/bootstrap.min.css">
	<script src="include/3b47dd4ac9.js"></script>
</head>
<body>

	<!-- HEADER -->
	<?php require_once('include/header.php'); ?>

	<div  class="shadow img_p_medico" style="background-image: url('media/images/medico.jpg'); min-height: 385px !important; min-width: 100%; background-size: 100%; background-position: center center; padding-top: 128px; margin-top: -250px; background-repeat: no-repeat;">
	</div>

	<div class="container-fluid">
		<div class="container">
			<div class="row">
			<div class="col-12 text-center">
				<h1 id="batata">Aqui você encontrará nossos profissionais:</h1>
			</div>

				<div class="col-lg-12 col-sm-12 mt-5 p-0 " >
					<div class="row">
						<?php while ($resultadoMedico = mysqli_fetch_array($queryMedico)) { ?>
							<div class="col-12 pt-4">
								<div class="card">
									<h6 class="card-header"><strong><?=$resultadoMedico['nome']?></strong></h6>
									<div class="card-body">
										<div class="row">
											<div class="col-4">
												<img  src="<?=$resultadoMedico['nome_imagem']?>" class="img-fluid img_medico">
											</div>
											<div class="col-8 p-0">
												<div>
													<i class="fas fa-user-md"></i>
													<strong>Especialidade:</strong> <?=$resultadoMedico['area']?>
													<br>
													<i class="fas fa-phone-alt"></i>
													<strong>Telefone:</strong> <?=$resultadoMedico['telefone']?>
													<br>
													<i class="fas fa-at"></i>
													<strong>E-mail:</strong> <?=$resultadoMedico['email']?>
													<br>
													<i class="fas fa-hospital"></i>
													<strong>Local de Atuação:</strong> <?=$resultadoMedico['hospital']?>
													<p class="mt-2">
														<button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapseExample<?=$resultadoMedico['id']?>" aria-expanded="false" aria-controls="collapseExample<?=$resultadoMedico['id']?>">
															Mais informações
														</button>
													</p>
													<div class="collapse" id="collapseExample<?=$resultadoMedico['id']?>">
														<div class="card card-body">
															<strong>Formação:</strong>
															<li><?=$resultadoMedico['formacao1']?></li>
															<li><?=$resultadoMedico['formacao2']?></li>
															<li><?=$resultadoMedico['formacao3']?></li>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
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
</body>
</html>