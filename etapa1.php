<?php 
	require_once('backend/etapa1_backend.php'); 
	require_once('include/paginas_restritas.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Etapa 1</title>
	<script src="include/3b47dd4ac9.js"></script>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="include/bootstrap.min.css">
	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:900&display=swap" rel="stylesheet"> -->
	<link rel="stylesheet" href="include/fonte.css">
	<link rel="stylesheet" type="text/css" href="media/css/etapa1.css">
	<link rel="stylesheet" type="text/css" href="media/css/media.css">
	<link rel="shortcut icon" type="image/x-icon" href="media/images/4232logo__.ico">
</head>
<body class="bg-light">

	<!-- HEADER -->
	<?php require_once('include/header.php'); ?>

	<div class="container-fluid">
		<div class="container">
			<h2 class="text-center mb-5">Quais destes sintomas você esta sentindo no seu corpo?</h2>
			<?php while($resultadoSintomas = mysqli_fetch_array($querySintomas)) { ?>
				<div class="card cardd bg-secondary divCheck <?=(in_array($resultadoSintomas['id'], $_SESSION['opcao_selec'])) ? "bg-success" : '' ?>" data-id="<?=$resultadoSintomas['id']?>">
					<label for="check" class="text-center text-white" id="check"><?=$resultadoSintomas['sintoma']?></label>
					<input type="checkbox" name="check" id="check" class="check" <?=(in_array($resultadoSintomas['id'], $_SESSION['opcao_selec'])) ? "checked" : '' ?>>
				</div>
			<?php } ?>
			<div class="row mb-5 mt-5">
				<div class="col-lg-4 ">
					<a  class="navbar-brand card" href="<?=$urlVoltar?>" style="border-radius: 100px;">
						<i class="fas fa-angle-left nav-link text-center" 
						data-whatever="@fat">   voltar</i>
					</a>
				</div>

				<?php if ($step < 2) { ?>
					<div class="col-lg-4 ">
						<a class="navbar-brand card p-1" href="?area=<?=$area?>&step=<?=($step+1)?>" style=" border-radius: 100px;">
							<i class="fas fa-angle-right nav-link text-center opcao" 
							data-whatever="@fat">   mais opções</i>
						</a>
					</div>
				<?php } ?>

				<div class="col-lg-4 col-md-12 col-sm-12">
					<a  class="navbar-brand card p-1" href="etapa2.php?area=<?=$area?>&step=1" style=" border-radius: 100px;">
						<i class="fas fa-angle-double-right nav-link text-center" 
						data-whatever="@fat">   próxima etapa</i>
					</a>
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
	<script src="media/js/etapa1.js"></script>
</body>
</html>