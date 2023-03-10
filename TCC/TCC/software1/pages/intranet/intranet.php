<?php require('../intranet/sec.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intranet</title>
    <link rel="stylesheet" href="../estilo/intranet.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <?php include('../publico/barraSuperiorPub.php'); ?>
    <?php
    @session_start();
    if (isset($SESSIONS['msg'])) {
        echo "<p class=alert> $_SESSION</p>";
        unset($_SESSION['msg']);
    }

    echo "<div class=bemvindo>";
    echo "<h1>Seja bem Vindo(a), $_SESSION[nome] </h1>";
    echo "</div>";

    $login = $_SESSION['usuarioLogin'];
    require('../acoes/connect.php');
    $morador = mysqli_query($con, "SELECT * FROM `tb_morador` WHERE `cpf`=$login");
    while ($moradores = mysqli_fetch_array($morador)) {

        echo "<div class=central>";
        echo "<div class=esquerda>";
        echo "  <nav class=botao>";
        echo "     <img src=../imagens/usuario-de-perfil.png alt=>";
        echo "     <a href =../intranet/meuCadastro.php?cpf=$moradores[cpf]> <h1>Meu Cadastro</h1> </a>";
        echo "  </nav>";
        echo "  <nav class=botao>";
        echo "        <img src=../imagens/silhueta-de-multiplos-usuarios.png alt=>";
        echo "      <a href =../intranet/usuarios.php>  <h1>Usuários</h1></a>";
        echo "  </nav>";
        echo "  <nav class=botao>";
        echo "        <img src=../imagens/porta-de-saida.png alt=>";
        echo "      <a href =../intranet/salao.php> <h1>Salão</h1></a>";
        echo "  </nav>";
        echo " </div>";
        echo " <div class=direita>";
        echo "  <nav class=botao>";
        echo "        <img src=../imagens/varios-usuarios.png alt=>";
        echo "      <a href =../intranet/moradores.php>  <h1>Moradores</h1></a>";
        echo "  </nav>";
        echo "  <nav class=botao>";
        echo "        <img src=../imagens/cartao-de-identidade.png alt=>";
        echo "       <a href =../intranet/minhaVaga.php> <h1>Minha Vaga</h1></a>";
        echo "  </nav>";
        echo "  <nav class=botao>";
        echo "        <img src=../imagens/megafone.png alt=>";
        echo "       <a href =../intranet/reclameAqui.php> <h1>Reclame aqui</h1></a>";
        echo "  </nav>";
        echo "</div>";
        echo "</div>";
        echo "<nav class=sair>";
        echo "<a href=../acoes/logoff.php class=botoes> <img src=../imagens/porta-de-saida.png>  Sair</a>";
        echo "</nav>";

    }
    ?>

</body>

</html>
