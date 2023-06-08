<?php

extract($_POST);
require('../acoes/connect.php');


if (mysqli_query($con, "INSERT INTO `tb_veiculo` (`cod_veiculo`, 
                                                  `modelo_veiculo`)
VALUES (
    NULL,
    '$modelo_veiculo');")) {
   $msg = "<p class=sucesso>Registro gravado com Sucesso</p>";
} else {
   $msg = "<p class=erro>Erro ao criar registro</p>";
}
session_start();
$_SESSION['msg'] = $msg;

var_dump($_FILES);
var_dump($_POST);


header("location:../intranet/cadVeiculo.php");
