<?php

extract($_POST);
require('../acoes/connect.php');


if (mysqli_query($con, "UPDATE `tb_fale_conosco` SET 
                                    `mensagem` = '$mensagem'
                                    WHERE `tb_fale_conosco`.`cod_msg` = '$cod_msg';")) {
    $msg = "Alterado com sucesso!";
} else {
    $msg = "Erro ao alterar!";
}
session_start();
$_SESSION['msg'] = $msg;
$usuarioLogin = $_SESSION['usuarioLogin'];
var_dump($mensagem);
header("location:../intranet/MeuFaleConosco.php");
