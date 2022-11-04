<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CondMind</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

        <link rel="stylesheet" href="../estilo/cadastro.css">
    <style>
         body{
        background-image: url("../imagens/PORTARIA.jpg");
        background-repeat: no-repeat;    
        background-size: 100vw 100vh;
        background-position: top;
        background-attachment: fixed;
    }
    </style>
</head>
<body>
<?php include('sidebar.php'); ?>    
<?php
        @session_start();
        if(isset($_SESSION['msg'])){
            echo "<p class=alert>$_SESSION[msg]</p>";
            unset( $_SESSION['msg']);
        }
?>
<?php
    $codMorador = $_GET['cod'];
    require('../acoes/connect.php');
    $busca = mysqli_query($con, "Select * from `tb_morador` where `cod_morador` = '$codMorador'");
    $morador = mysqli_fetch_array($busca);
?>
    <div class="mt-5 container text-center">
  <div class="row ">
      <div class="col" > <!--  primeira coluna -->
        <div class="imglogo">
            <img src="../imagens\ShannonLogo.png" class="d-flex w-10 h-10" alt="...">
        </div>
    </div>
    <div class="cadastro col mt-3"> <!--Segunda coluna -->
    <h5 class="card-title">Meu Cadastro</h5>

    <form class=" mt-5 row g-3 " action="../acoes/meuCadastro.act.php" method="post" id="" enctype="multipart/form-data">
        <div class="mx-auto">
            <input type="hidden" name="codMorador" value="<?php echo $morador['cod_morador']?>" >
            Codigo Contato <?php echo $morador['cod_morador']; ?>
        </div>
  <div class="col-md-4">
      <label for="primeironome"  class="form-label">Primeiro nome</label>
      <input type="primeironome" name="primeiro_nome" class="form-control" id="primeironome" value="<?php echo $morador['primeiro_nome']; ?>">
    </div>
    <div class="col-md-8">
    <label for="nomecompleto" class="form-label">Nome Completo</label>
    <input type="nomecompleto" name="nome_completo" class="form-control" id="nomecompleto" value="<?php echo $morador['nome_completo']; ?>">
  </div>
  <div class="col-4">
      <label for="cpf" class="form-label">CPF</label>
      <input type="text" class="cpf form-control" id="cpf" name="cpf" value="<?php echo $morador['cpf']; ?>">
    </div>
    <div class="col-4">
        <label for="rg" class="form-label">RG</label>
        <input type="text" class="form-control" name="rg" id="rg" value="<?php echo $morador['rg']; ?>">
  </div>
  <div class="col-md-4">
      <label for="dtnascimento" class="form-label">Data de Nascimento</label>
      <input type="text" class="form-control" name="dtnascimento" id="dtnascimento" value="<?php echo $morador['dtnascimento']; ?>">
    </div>
    <div class="col-md-4">
    <label for="celular" class="form-label">Celular</label>
    <input type="text" class="form-control" name="celular" id="celular" value="<?php echo $morador['celular']; ?>">
</div>
<div class="col-md-4">
    <label for="estadocivil" class="form-label">Estado Civil</label>
    <select id="estadocivil" value="<?php echo $morador['estadocivil']; ?>" name="estadocivil" class="form-select">
      <option select ></option>
      <option >Solteiro(a)</option>
      <option >Casado(a)</option>
      <option >Viuvo(a)</option>
      <option >Divorciado(a)</option>
      <option>...</option>
    </select>
</div>
<div class="col-md-2">
    <label for="inputZip" class="form-label">Bloco</label>
    <input type="text" class="form-control" name="bloco" id="inputZip" value="<?php echo $morador['bloco']; ?>">
</div>
<div class="col-md-2">
    <label for="inputZip" class="form-label">Nº AP</label>
    <input type="text" class="form-control" name="numero_apartamento" id="inputZip" value="<?php echo $morador['numero_apartamento']; ?>">
</div>
<div class="col-12 ">
    <button type="submit" class="mt-4 p-2 px-5 btn btn-primary">Cadastrar</button>
</form>
</div>
<button onclick="cancelarIntra()" class="mt-4 p-2 px-5 btn btn-primary">Cancelar</button>
</div>
</div>
</div>

</body>
</html>