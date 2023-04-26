<?php require('sec.php') ?>

<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../estilo/bootstrap.min.css">

     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet"> 
    <title>Minha Vaga</title>
</head>

<body>
    <?php include('../intranet/barraSuperiorInt.php'); ?>
    <?php
    @session_start();
    if (isset($_SESSION['msg'])) {
        echo "<p class=alert>$_SESSION[msg]</p>";
        
        unset($_SESSION['msg']);
    }

    $codUsuario = $_SESSION['usuarioLogin'];
    require('../acoes/connect.php');
    $busca = mysqli_query($con, "Select * from `tb_morador` where `cpf` = '$codUsuario'");
    $morador = mysqli_fetch_array($busca);
    ?>

    
     <div class="salaoLista">
 
        <?php include('../intranet/minhaVagaLista.php'); ?>
    </div> 
</body>

</html>