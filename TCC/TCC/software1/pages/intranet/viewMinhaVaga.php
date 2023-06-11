<?php require('sec.php') ?>

<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/viewMinhaVaga.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="../imagens/CondMind_arredondado.png"/>
    <title>Minha vaga</title>
</head>

<body>
    <?php include('../intranet/barraSuperiorInt.php'); ?>
    <div class="barraLateral">
        <?php include('../intranet/barraLateral.php'); ?>
    </div>
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


    <div class="buttons">
        <div class="btn2">
            <a class="button" id="button1" href="minhaVaga.php">
                <div class="icon">
                    <img class="icons" src="../imagens/icons8-person-ios-16-glyph-32.png"><br>Vagas
                </div>
            </a>
        </div>

<?php
    echo    "<div class=$controleMorador>";
?>
        <div class="btn2">
            <a class="button" id="button2" href="meuveiculo.php">
                <div class="icon">
                <img class="icons" src="../imagens/icons8-station-wagon-ios-16-32.png"><br>Veículos
                </div>
            </a>
        </div>
<?php
    echo    "</div>";
?>
<?php
    echo    "<div class=$controleMorador>";
?>
            <div class="btn3">
                <a class="button" id="button3" href="cadVaga.php">
                    <div class="icon">
                    <img class="icons" src="../imagens/icons8-outdoor-parking-ios-16-32.png"><br>Cadastrar Vaga
                    </div>
                </a>
            </div>
<?php
    echo    "</div>";
?>
<?php
    echo    "<div class=$controleMorador>";
?>
        <div class="btn3">
            <a class="button" id="button3" href="cadVeiculo.php">
                <div class="icon">
                <img class="icons" src="../imagens/icons8-station-wagon-ios-16-32.png"><br>Cadastrar Veículo
                </div>
            </a>
        </div>
<?php
    echo    "</div>";
?>
    </div>

    <script src="https://kit.fontawesome.com/37e7af53fa.js" crossorigin="anonymous"></script>
</body>

</html>