<?php

extract($_POST);
require('../acoes/connect.php');


if (mysqli_query($con, "INSERT INTO `tb_veiculo_morador` (`cod_morador`, 
                                                `placa_veiculo`, 
                                                `tipo_veiculo`,
                                                `cor`,
                                                `modelo`,
                                                `ano`)
VALUES (NULL,
'$placa_veiculo',
'$tipo_veiculo', 
'$cor', 
'$modelo', 
'$ano');")) {
   $msg = "<p class=sucesso>Registro gravado com Sucesso</p>";
} else {
   $msg = "<p class=erro>Erro ao criar registro</p>";
}
session_start();
$_SESSION['msg'] = $msg;

var_dump($_FILES);
var_dump($_POST);


header("location:../intranet/minhaVaga.php");
