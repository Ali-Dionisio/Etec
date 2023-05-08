<?php

require('connect.php');
extract($_FILES);
extract($_POST);

//if (empty($foto)) {
   $endereco = "../imgs/".md5(time()).".jpg";
//} 

move_uploaded_file($foto['tmp_name'], $endereco);

if (mysqli_query($con, "INSERT INTO `tb_morador` (`cod_morador`, 
                                                `primeiro_nome`, 
                                                `nome_completo`,
                                                `email`,
                                                `cpf`, 
                                                `rg`,
                                                `dtnascimento`,
                                                `celular`,
                                                `estadocivil`,
                                                `bloco`,
                                                `numero_apartamento`,
                                                `funcao`,
                                                `foto`)
VALUES (NULL, 
'$primeiro_nome',
'$nome_completo', 
'$email', 
'$cpf', 
'$rg', 
'$dtnascimento',
'$celular', 
'$estadocivil', 
'$bloco', 
'$numero_apartamento',
'$funcao',
'$endereco');")) {
   $msg = "<p class=sucesso>Registro gravado com Sucesso</p>";
} else {
   $msg = "<p class=erro>Erro ao criar registro</p>";
}
session_start();
$_SESSION['msg'] = $msg;

var_dump($_FILES);
var_dump($_POST);


header("location:../intranet/moradores.php");
