<?php 
	session_start();
	error_reporting(0);
	require_once('include/conexao.php');
		// Junta as informações dos usuarios
	$sql = "SELECT * FROM tb_usuario WHERE id = '{$_SESSION['id_usuario']}'";
	$queryEdição = mysqli_query($con, $sql);
	$resultado = mysqli_fetch_array($queryEdição);

?>
<link rel="stylesheet" type="text/css" href="media/css/header.css">

<!-- ==============================================NAVBAR======================================================= -->
<nav class="navbar  navbar-expand-lg navbar-light mb-5" style="background-color: transparent;">
	<a class="navbar-brand" href="index.php">
		<img src="media/images/logo__.png" style="width: 160px; margin-left: 30px; ">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse  navbar-collapse  ml-2	" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active ml-5">
				<a class="nav-link slide-center-out" href="index.php">Início <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item ml-5">
				<a class="nav-link slide-center-out" href="sobre.php">Sobre</a>
			</li>
			<!-- ==============consultar============= -->
			<?php if (isset($_SESSION['logado']) && $_SESSION['logado'] == true) { ?>
			<li class="nav-item ml-5">
				<a class="nav-link slide-center-out" href="consulta.php">Consultar</a>
			</li>
			<?php } ?> 
			<!-- ===============Medico============= -->
			<?php if (isset($_SESSION['logado']) && $_SESSION['logado'] == true) { ?>
			<li class="nav-item ml-5">
				<a class="nav-link slide-center-out" href="medico.php">Médico</a>
			</li>
			<?php } ?>

			<!-- ==============historico============== -->
			<?php if (isset($_SESSION['logado']) && $_SESSION['logado'] == true) { ?>
				<li class="nav-item ml-5">
					<a class="nav-link slide-center-out mr-4" href="historico.php">Histórico</a>
				</li>
			<?php } ?>
	 
		</ul>
		<form class="form-inline my-2 my-lg-0 mr-5">
			
			<!-- ================login================ -->
			<?php if (isset($_SESSION['logado']) && $_SESSION['logado'] == true) { ?>

			<a class="navbar-brand" href="cadastro.php?id=<?=$resultado['id']?>">
				<i class="fas fa-user nav-link ml-2 p-0 text-success" 
				data-whatever="@fat"></i>
			</a>

			<div class="text-dark">
				<a class="navbar-brand"> Olá, <?=$_SESSION['nome_usuario']?></a>
			</div>

			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a href="backend/logoff.php" class="nav-link ml-4  slide-center-out"> Sair</a>
				</li>
			</ul>

			<?php } else { ?> 
			<a class="navbar-brand" href="#">
				<i class="fas fa-user nav-link ml-2   " data-target="#exampleModall"  href="#" data-toggle="modal" 
				data-whatever="@fat" ></i>
			</a>
			<?php } ?>


			<!-- =============cadastro============ -->
			<?php if (isset($_SESSION['logado'])  == false) { ?>
			<a class="navbar-brand " href="#">
				<i class="fas fa-user-plus nav-link ml-2 " data-target="#exampleModal"  href="#" data-toggle="modal" 
				></i>
			</a>
			<?php }  ?>
		</form>
	</div>
</nav>

<!--Pagina login -->
<?php 
require_once('backend/login.php');

?>

<div class="modal fade " id="exampleModall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div id="exampleModall" class="login-box rounded pt-0">
		<div class="modal-dialog"></div>
		<div role="document">

			<h1 class=" m-0 pb-2 text-center  " style="font-size: 20px;">Login </h1>
			<form action="" method="post">
				<!-- E-mail -->
				<label for="email_login">E-mail</label>
				<input type="email" class="form-control" name="email_login" id="email_login" placeholder="Fulando@gmail.com"
				required="">

				<!-- Senha -->
				<label for="senha_login">Senha</label>
				<input type="password" class="form-control" id="senha_login" name="senha_login" placeholder="******">
				<input type="submit" class="btn" name="botao_login" id="botao_login" value="login"  required="">
				<a class="navbar-brand " href="recuperar_senha.php"> Esquecer a senha</a>  
			</form>
			<?php if (isset($alerta)) { ?>
			<div class="alert alert-<?=$alerta['tipo']?>">
				<?=$alerta['mensagem']?>
			</div>
			<?php } ?>
		</div>
	</div>
</div>

<!-- pagina cadastro -->
<?php require_once('backend/cadastro_usuarios.php'); ?>

<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div id="exampleModall" class="login-box rounded pt-0">
		<div class="modal-dialog"></div><!-- para conseguir voltar se apertar "esc" -->
		<div role="document">

			<h1 class=" m-0 pb-2 text-center  " style="font-size: 20px;">Cadastre-se </h1>
			<form method="post" action="" name="formCadastro">
				<div class="row">
					<div class=" col-lg-6">
						<label for="nome">Nome Completo:<strong class="text-danger"> *</strong></label>
						<input type="text" name="nome" id="nome" placeholder="Gabriel de Souza" required="" ><br>
					</div>
					<div class="col-lg-6">
						<label for="email">Email:<strong class="text-danger"> *</strong></label>
						<input type="email" name="email" id="email" required=""><br>
					</div>
				</div>

				<div class="row">
					<div class=" col-lg-6">
						<label for="dataNasc">Data de Nascimento: <strong class="text-danger"> *</strong></label>
						<input type="date" name="dataNasc" id="dataNasc" required="" ><br>
					</div>
					<div class=" col-lg-6" >
						<label for="sexo">Sexo: <strong class="text-danger"> *</strong></label>
						<select  name="sexo" id="sexo" required="">
							<option>Masculino</option>
							<option>Feminino</option>
						</select><br>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-6">
						<label for="senha">Senha: <strong class="text-danger"> *</strong></label>
						<input type="password" name="senha" id="senha" class="form-control" required=""><br>
					</div>
					<div class="col-lg-6">
						<label for="confSenha">Confirmar Senha: <strong class="text-danger"> *</strong></label>
						<input type="password" name="confSenha" id="confSenha" class="form-control" required=""><br>
					</div>
				</div>
				<input type="submit" name="cadastro" id="cadastro" class="btn btn-primary " value="Cadastre-se" disabled="">
			</form>
		</div>
	</div>
</div>

