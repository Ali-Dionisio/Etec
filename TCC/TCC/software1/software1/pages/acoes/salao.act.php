<?php

require('../acoes/connect.php');
extract($_POST);
extract($_FILES);

if (mysqli_query($con, "INSERT INTO `tb_salao` (`cod_salao`,
                                                `data_reserva`,
                                                `hora_inicio`,
                                                `hora_fim`,
                                                `cod_morador`)
VALUES (NULL, 
'$Calendario', 
'$horaInicio', 
'$horaFim', 
'$cod_morador');")) {
    $msg = "<p class=sucesso>Registro gravado com Sucesso</p>";
} else {
    $msg = "<p class=erro>Erro ao criar registro</p>";
}
session_start();
$_SESSION['msg'] = $msg;

var_dump($_POST);
var_dump($_FILES);

header("location:../intranet/salao.php");