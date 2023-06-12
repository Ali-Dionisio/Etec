<?php

extract($_POST);
require('../acoes/connect.php');


if (mysqli_query($con, "UPDATE `tb_cor` SET 
                                    `descricao_cor` = '$descricao_cor'

                                    WHERE `tb_cor`.`cod_cor` = '$cod_cor';")) {
    $msg = "Alterado com sucesso!";
} else {
    $msg = "Erro ao alterar!";
}
session_start();
$_SESSION['msg'] = $msg;
$usuarioLogin = $_SESSION['usuarioLogin'];
header("location:../intranet/cadVeiculo.php");
