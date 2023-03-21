<?php
require('connect.php');
extract($_POST);
$senha = md5($senha);
if(mysqli_query($con, "INSERT INTO `tb_livraria_adm` (`nome_adm`, `email`, `senha`) 
VALUES ('$nome_adm', '$email', '$senha');")){
    $msg = "<p class= sucesso> Registro criado com sucesso!</p>";
}else{
    $msg = "<p class= erro> Erro ao criar registro!</p>";
}

session_start();
$_SESSION['msg'] = $msg;
header("location:login.php");
