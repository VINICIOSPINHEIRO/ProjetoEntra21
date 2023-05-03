<?php
  require_once ('include/paginas_restritas.php');
?>

<html>
<head>
  <meta charset="utf-8">
  <title>Painel Inicio</title>
  <link rel="stylesheet" type="text/css" href="media/css/painel.css">
  <link rel="shortcut icon" type="image/x-icon" href="media/images/4232logo__.ico">

  <!-- Bootstrap core CSS -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="include/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">SymFinder</a>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap d-none d-sm-block">
        <a class="nav-link" href="index.php">Sair</a>
      </li>
    </ul>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 bg-light sidebar" style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
        <div class="sidebar-sticky pt-2 pb-3 pt-sm-0" style="height: 100% !important;">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="painel.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profissional.php">Profissional</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="respostas.php">Sintomas</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="hospital_painel.php">Hospital</a>
            </li>    
            <li class="nav-item d-block d-sm-none">
              <a class="nav-link" href="index.php">Sair</a>
            </li>   
          </ul>
        </div>
      </nav>
      <div class="col-md-10">
        <h1 class="mt-5" style="text-align: center;">Exemplos de como vai funcionar!</h1>
        <h5 style="text-align: center;" class="mt-4">Nesta Pagina você tera acesso a Alteração, Atualização ou Exclusão de Profissionais ou Respostas e Perguntas</h5>
        <div class="mt-4">
          <div class="alert alert-primary" role="alert">Editar profissional ou perguntas e respostas</div>
          <div class="alert alert-success" role="alert">Criar profissional ou perguntas e respostas</div>
          <div class="alert alert-danger" role="alert">Excluir profissional ou perguntas e respostas</div>
        </div>
      </div>
    </div>
  </div>
</body>

<!-- BOOSTRAP -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
  <script src="include/jquery-3.3.1.slim.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
  <script src="include/popper.min.js"></script>
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
  <script src="include/bootstrap.min.js"></script>
</body>
</html>