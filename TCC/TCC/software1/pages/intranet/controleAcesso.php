<style>
    .morador{
        display: none;
        
    }
</style>

<?php

require('../acoes/connect.php');

@session_start();
$usuario = $_SESSION['usuarioLogin'];

$busca = mysqli_query($con, "SELECT * FROM `tb_usuarios` where `usuario` = '$usuario'");
$controle = mysqli_fetch_array($busca);
$controleMorador = "";
$campo = "";
if ($controle['funcao'] == 'Morador' ) {
    $controleMorador = "morador";
    $campo = "disabled";
}

    //header("location:../publico/index.php");
