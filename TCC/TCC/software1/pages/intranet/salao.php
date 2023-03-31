<?php require('sec.php') ?>

<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/salao.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <title>Salão</title>
</head>

<body>
    <?php include('../intranet/barraSuperiorInt.php'); ?>
    <?php
    @session_start();
    if (isset($_SESSION['msg'])) {
        echo "<p class=alert>$_SESSION[msg]</p>";
        unset($_SESSION['msg']);
    }
    ?>

    <div class="titSalao">
        <div class="esquerda">
            <h2>Agende o seu horário, <?php echo " $_SESSION[nome] "; ?> </h2><br>
        </div>
        <div class="direita">
            <p> Em nosso Salão de festas você pode curtir todas as atrações.</p>
        </div>
    </div>


    <div id="quadro">
        <div id="state">
            <?php include('../intranet/containner.php'); ?>
        </div>
    </div>
    <div class="disposicaoDate">
        <h2>Marque abaixo a data e o horario de inicio e termino do seu evento</h2>
        <form class="form mt-2 row g-3" action="../acoes/salao.act.php" method="post" id="">

            <div class="marcaEvento">
                <div class="dataHora1">
                    <p> Data do evento: </p>
                    <input type="date" name="Calendario" id="calendario">
                </div>
                <div class="dataHora2">
                    <p> Horário de Inicio</p>
                    <input type="time" name="horaInicio" id="calendario">
                </div>
                <div class="dataHora2">
                    <p> Horário de Termino </p>
                    <input type="time" name="horaFim" id="calendario">
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="mt-4 p-2 px-5 btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>
    <div class="salaoLista">
        <?php include('../intranet/salaoLista.php'); ?>
    </div>
</body>

</html>