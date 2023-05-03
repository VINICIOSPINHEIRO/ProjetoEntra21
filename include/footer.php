<?php 
require_once('include/duvidas.php');

?>

<link rel="stylesheet" type="text/css" href="media/css/footer.css">

<footer class="ft page-footer font-small indigo pt-3">


  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">
<hr style="background-color: rgb(168, 182, 186); width: 1200px; height: 1px; ">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h4 class="text-uppercase mt-4 mb-4 footer">Redes Sociais</h4>
        <ul class="nt list-unstyled">
          <li class="">
            <i class="fab fa-facebook " ></i>
            <a href="https://www.facebook.com/symfinder.symfinder.9"
            style="text-decoration: none;">Facebook </a>
          </li>

          <li>
            <i class="fab fa-instagram "></i>
            <a  href="https://www.instagram.com/symfinder/"
            style="text-decoration: none;">Instagram</a>
          </li>

          <li>
            <i class="fas fa-at"></i>
            <a style="text-decoration: none;">symfinder@gmail.com</a>
          </li>
        </ul>
      </div>

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h4 class="text-uppercase mt-4 mb-4  footer">Usuário</h4>
        <ul class="nt list-unstyled">
          <li><a href="#" data-target="#modal_duvidas" data-toggle="modal" style="text-decoration:none;">Dúvidas</a></li>
          <li><a href="#" data-target="#modal_sugestao" data-toggle="modal" style="text-decoration:none;">Sugestões</a></li>
          <li><a href="#" data-target="#modal_feedback" data-toggle="modal" style="text-decoration:none;">Feedback</a></li>
        </ul>
      </div>

      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h4 class="text-uppercase mt-4 mb-4  footer">Observações</h4>
        <p >Toda a Página está sendo desenvolvida com muito orgulho por uma equipe de jovens do programa Entra21 Edição 2019. Temos o objetivo de ajudar e agradar nossos clientes. Se possível deixe seu feedback e sugestões.</p>
      </div>
    </div>
  </div>

  <!-- Copyright -->
  <div class="ft1 footer-copyright text-center pt-4 pb-2">
   <p>Direitos Reservados a equipe do projeto TCC Entra21.
     <strong > SymFinder © 2019</strong>  
     <?php if ($_SESSION['logado'] == true) { 
      if ($_SESSION['nivel_acesso'] == 'adm') { ?>
      <a class="pr-3 " style="float: right; color: black;" href="painel.php">Administrador</a>
      <?php } ?>
      <?php } ?>
    </p>

  </div>
</footer>