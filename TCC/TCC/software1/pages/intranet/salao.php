<?php require('sec.php') ?>

<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/salao.css">
    <title>Salão</title>
</head>
<body>
<?php include('../intranet/barraSuperiorInt.php'); ?>    
    <div id="quadro">
        <div id="state">
            <?php include('../intranet/containner.php'); ?>    
        </div>
    </div>
<div class="disposicaoDate">
    <h1>Marque abaixo a data e o horario de inicio e termino do seu evento</h1>
    Data do evento: <input type="date" name="Calendario" id="calendario">
    Horário de Inicio<input type="time" name="Calendario" id="calendario">
    Horário de Termino<input type="time" name="Calendario" id="calendario">

</div>
</body>
</html>