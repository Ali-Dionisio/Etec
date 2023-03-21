<?php
extract($_POST);
$senha = md5($senha);

require('connect.php');
@session_start();
$busca = mysqli_query($con, "Select * from `tb_livraria_adm` where `email` = '$email'");


if ($busca->num_rows == 1) {
    $login = mysqli_fetch_array($busca);
    if ($senha === $login['senha']) {
        $_SESSION['login'] = true;
        $_SESSION['email'] = $login['email'];
        $target = "location:listar.php";
        $msg = "<h1> Seja bem-vindo(a) $_SESSION[nome_adm] </h1> ";
    } else {
        $target = "location:login.php";
        $msg = "Email ou senha inválidos";
    }
} else {
    $target = "location:Login.php";
    $msg = "Email ou senha inválidos";
}
if ($email == "" || $senha == "") {
    $msg = "Preencha todos os campos!";
}
$_SESSION['msg'] = $msg;
header($target);
