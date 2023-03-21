<?php
require('connect.php');
extract($_FILES);
extract($_POST);
$senha = md5($senha);
$endereco = "imgs/".md5(time()).".jpg";
move_uploaded_file($foto['tmp_name'],$endereco);

if(mysqli_query($con, "INSERT INTO `tb_livraria` (`Codigo`, `Nome_adm`, `Email`, `Senha`, `Nome_Livro`, `Autor`, `Preco`, `foto`) 
VALUES (NULL, '$nome_adm', '$email', '$senha', '$nome_livro', '$autor', '$preco', '$endereco');")){
    $msg = "<p class= sucesso> Registro criado com sucesso!</p>";
}else{
    $msg = "<p class= erro> Erro ao criar registro!</p>";
}

session_start();
$_SESSION['msg'] = $msg;
header("location:listar.php");