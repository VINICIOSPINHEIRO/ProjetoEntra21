<?php
	require_once('include/paginas_restritas.php');
	require_once('backend/backend_historico.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Histórico</title>
	<script src="include/3b47dd4ac9.js"></script>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="include/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="media/css/media.css">
	<link rel="stylesheet" type="text/css" href="media/css/sobre.css">
	<link rel="shortcut icon" type="image/x-icon" href="media/images/4232logo__.ico">
	<<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:900&display=swap" rel="stylesheet"> -->
	<link rel="stylesheet" href="include/fonte.css">
</head>
<body class="bg-light">

	<!-- HEADER -->
	<?php 
	require_once('include/header.php');
	?>

	<div class="shadow img_sobre" style="background-image: url('media/images/fundo.jpg');  min-height: 320px; min-width: 100%; background-size: 100%; background-position: center center; padding-top: 128px; margin-top: -184px; background-repeat: no-repeat;">
		<div class="text-center my-5">
			
		</div> 
	</div>
	
	<div class="container-fluid">
		<div class="container pb-5"  style=" margin-top: -200px;">
			<h1 id="batata">Seu histórico de consultas:</h1>
			<div class="card mt-5">
				<div class="card-body">
					<div class="row col-12 col-md m-0">
						<table class="table table-hover table-striped m-0 p-0">
							<thead>
								<tr>
									<th scope="col">Área Médica</th>
									<th scope="col">Parte do Corpo</th>
									<th></th>
								</tr>
							</thead>

							<form method="post" action="">
								<tbody>
									<?php while ($resultadoConsulta = mysqli_fetch_array($queryConsulta)) { ?>
									<tr>	
										<td><?=$resultadoConsulta['area']?></td>	
										<td><?=utf8_encode($resultadoConsulta['parte'])?></td>
										<td style="float: right;">
											<a href="historico_visualizacao.php?id_consulta=<?=$resultadoConsulta['id']?>" class="btn btn-info text-center">Visualizar</a>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</form>
						</table>
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