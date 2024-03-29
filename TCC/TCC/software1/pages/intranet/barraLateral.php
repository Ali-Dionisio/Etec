<?php require('sec.php') ?>
<?php require('controleAcesso.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <title>Intranet</title>
  <link rel="stylesheet" href="../estilo/sidebar.css">
</head>

<body>
  <!-- logo burger -->
  <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
    <img src="../imagens/icons8-menu-30.png" alt="">
  </button>

  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-body">
      <div>

        <div class="d-grid gap-3">
          <!-- Logo com link para tela inicial do intranet -->
          <a href="../intranet/intranet.php">
            <div class="p-2  mx-auto"><img src="../imagens/CondMind.png" class="logo rounded float-top" alt="Inicio">
          </a>
        </div>
      </div>
    </div>
    <div class="d-grid gap-3">
      <?php
      @session_start();
      if (isset($_SESSION['msg'])) {
        unset($_SESSION['msg']);
      }
      $login = $_SESSION['usuarioLogin'];
      require('../acoes/connect.php');
      $morador = mysqli_query($con, "SELECT * FROM `tb_morador` WHERE `cpf`=$login");
      while ($moradores = mysqli_fetch_array($morador)) {
        echo "<ul>";
        echo "  <li>";
        echo "    <a href =../intranet/meuCadastro.php?cpf=$moradores[cpf]>
            <div class='p-2 mx-auto'>  <button type=button class='btn btn-primary style=width: 220px;'>Meu Cadastro</button></div> </a>";
        echo "  </li>";
        echo "<div class=$controleMorador>";
        echo "  <li>";
        echo "    <a href =../intranet/moradores.php>
            <div class='p-2 mx-auto'>  <button type=button class='btn btn-primary style=width: 220px;'>Moradores</button></div> </a>";
        echo "  </li>";
        echo "  <li >";
        echo "    <a href =../intranet/usuarios.php>
          <div class='p-2 mx-auto'>  <button type=button class='btn btn-primary style=width: 220px;'>Usuários</button></div> </a>";
        echo "  </li>";
        echo "</div>";
        echo "  <li>";
        echo "    <a href =../intranet/$minhaVaga
          <div class='p-2 mx-auto'>  <button type=button class='btn btn-primary style=width: 220px;'>Minha Vaga</button></div> </a>";
        echo "  </li>";
        echo "  <li>";
        echo "    <a href =../intranet/salao.php>
          <div class='p-2 mx-auto'>  <button type=button class='btn btn-primary style=width: 220px;'>Salão</button></div> </a>";
        echo "  </li>";
        echo "  <li>";
        echo "    <a href =../intranet/FaleConosco.php>
          <div class='p-2 mx-auto'>  <button type=button class='btn btn-primary style=width: 220px;'>Fale conosco</button></div> </a>";
        echo "  </li>";
        echo "</ul>";
      }
      ?>
    </div>
    <div class="opcoes dropdown mt-3  bottom-10 start-10">
      <button class="btn btn-secondary dropdown-toggle" style="width: 220px;" type="button" data-bs-toggle="dropdown">
        Opções
      </button>
      <img src="" alt="">
      <ul class="dropdown-menu">
        <li><a class="btn btn-primary" href="../acoes/logoff.php">Sair</a></li>
      </ul>
    </div>


  </div>
  </div>
</body>
<script src="../src/javascript.js"></script>

</html>