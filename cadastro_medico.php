<?php 
	require_once('include/conexao.php');
	require_once('backend/painel_medico.php');
	require_once ('include/paginas_restritas.php'); 
	error_reporting(0);

	// PEGAR AS AREAS MEDICAS CADASTRADAS
	$sql = "SELECT * FROM tb_area_medica";
	$queryAreas = mysqli_query($con, $sql);

	// PEGAR OS HOSPITAIS CADASTRADOS
	$sql = "SELECT * FROM tb_hospital";
	$queryHospital = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Médico</title>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="include/bootstrap.min.css">
	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:900&display=swap" rel="stylesheet"> -->
	<link rel="stylesheet" href="include/fonte.css">
	<link rel="shortcut icon" type="image/x-icon" href="media/images/4232logo__.ico">
</head>
<body style="background-color: rgba(0,0,0,0.6);">

	<div class="container-fluid">
		<div class="container">
			<h1 class="text-center mt-3 text-white">Cadastro de Médicos</h1>
			<div class="card mt-3">
				<div class="card-body">
					<form method="post" action="" name="formCadastro">
						<label for="cod_medico">Cod. do médico:</label>
						<input type="number" name="cod_medico" id="cod_medico" placeholder="Ex: 1" disabled class="form-control" value="<?=$resultadoUsuario['id']?>"><br>

						<label for="nome_medico">Nome do médico:</label>
						<input type="text" name="nome_medico" id="nome_medico" class="form-control" placeholder="Ex: Dr. Ray" value="<?=$resultadoUsuario['nome']?>"><br>

						<label for="telefone">Telefone:</label>
						<input type="text" name="telefone" id="telefone" class="form-control" placeholder="(47) 33236098" value="<?=$resultadoUsuario['telefone']?>">

						<label for="email" class="pt-4">Email:</label>
						<input type="email" name="email" id="email" class="form-control" placeholder="dr.hercules@gmail.com" value="<?=$resultadoUsuario['email']?>">

						<label for="area_medica" class="pt-4">Área Médica</label>
						<select name="area_medica" id="area_medica" class="custom-select">
							<?php while($resultadoAreas = mysqli_fetch_array($queryAreas)) { ?>
								<option value="<?=$resultadoAreas['id']?>" <?= ($resultadoUsuario['fk_am']==$resultadoAreas['id']) ? 'selected' : ''?> ><?=$resultadoAreas['area_medica']?></option>
							<?php } ?>
						</select>

						<label for="hospital" class="pt-4">Hospital:</label>
						<select name="hospital" id="hospital" class="custom-select">
							<?php while($resultadoHospital = mysqli_fetch_array($queryHospital)) { ?>
								<option value="<?=$resultadoHospital['id']?>"  <?= ($resultadoUsuario['fk_hospital']==$resultadoHospital['id']) ? 'selected' : ''?>><?=$resultadoHospital['nome']?></option>
							<?php } ?>									
						</select>

						<label for="formacao_1" class="pt-4">Formação 1</label>
						<input type="text" name="formacao_1" id="formacao_1" class="form-control" placeholder="Especialização" value="<?=$resultadoUsuario['formacao1']?>">

						<label for="formacao_2" class="pt-4">Formação 2</label>
						<input type="text" name="formacao_2" id="formacao_2" class="form-control" placeholder="Especialização" value="<?=$resultadoUsuario['formacao2']?>">

						<label for="formacao_3" class="pt-4">Formação 3</label>
						<input type="text" name="formacao_3" id="formacao_3" class="form-control" placeholder="Especialização" value="<?=$resultadoUsuario['formacao3']?>">

						<input type="submit" name="btnSalvar" value="Salvar" class="btn btn-success mt-4">
						<input type="submit" name="btnExcluir" value="Excluir" class="btn btn-danger mt-4">
						<a href="profissional.php" class="btn btn-dark mt-4">Voltar</a>
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