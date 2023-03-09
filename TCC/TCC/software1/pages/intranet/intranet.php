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
    ?>
    <div class="central">
        <div class="esquerda">
            <nav class="botao">
                <img src="../imagens/usuario-de-perfil.png" alt="">
                <h1>Meu Cadastro</h1>
            </nav>
            <nav class="botao">
                <img src="../imagens/silhueta-de-multiplos-usuarios.png" alt="">
                <h1>Usuários</h1>
            </nav>
            <nav class="botao">
                <img src="../imagens/porta-de-saida.png" alt="">
                <h1>Salão</h1>
            </nav>
        </div>
        <div class="direita">
            <nav class="botao">
                <img src="../imagens/varios-usuarios.png" alt="">
                <h1>Moradores</h1>
            </nav>
            <nav class="botao">
                <img src="../imagens/cartao-de-identidade.png" alt="">
                <h1>Minha Vaga</h1>
            </nav>
            <nav class="botao">
                <img src="../imagens/megafone.png" alt="">
                <h1>Reclame aqui</h1>
            </nav>
        </div>
    </div>
</body>

</html>