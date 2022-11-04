<?php

require('connect.php');
extract($_FILES);
extract($_POST);
$endereco = "../imgs/".md5(time()).".jpg";
move_uploaded_file($foto['tmp_name'],$endereco);
if(mysqli_query($con, "INSERT INTO `tb_morador` (`cod_morador`, 
                                                `primeiro_nome`, 
                                                `nome_completo`,
                                                `cpf`, 
                                                `rg`,
                                                `dtnascimento`,
                                                `celular`,
                                                `estadocivil`,
                                                `bloco`,
                                                `numero_apartamento`,
                                                `foto`)
VALUES (NULL, 
'$primeiro_nome',
'$nome_completo', 
'$cpf', 
'$rg', 
'$dtnascimento',
'$celular', 
'$estadocivil', 
'$bloco', 
'$numero_apartamento',
'$endereco');")){
   $msg = "<p class=sucesso>Registro gravado com Sucesso</p>";
}else{
   $msg = "<p class=erro>Erro ao criar registro</p>";
}
session_start();
$_SESSION['msg'] = $msg;

var_dump($_FILES);
var_dump($_POST);
var_dump( $endereco);

header("location:../intranet/cadMorador.php");

