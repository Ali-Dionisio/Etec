<?php

extract($_POST);
require('../acoes/connect.php');


if (mysqli_query($con, "INSERT INTO `tb_veiculo_morador` (`placa_veiculo`, 
                                                         `tipo_veiculo`, 
                                                         `modelo`, 
                                                         `ano`, 
                                                         `cor`, 
                                                         `cod_morador`) 
VALUES ('$placa_veiculo',
'$tipo_veiculo', 
'$modelo', 
'$ano', 
'$cor',
NULL);")) {
   $msg = "<p class=sucesso>Registro gravado com Sucesso</p>";
} else {
   $msg = "<p class=erro>Erro ao criar registro</p>";
}
session_start();
$_SESSION['msg'] = $msg;

var_dump($_FILES);
var_dump($_POST);
var_dump($_SESSION['msg']);


//header("location:../intranet/minhaVaga.php");
