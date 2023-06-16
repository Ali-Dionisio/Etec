<?php
$codModelo = $_GET['cod'];
require('connect.php');
extract($_POST);
    if(mysqli_query($con, "DELETE FROM `tb_veiculo` 
                           WHERE `tb_veiculo`.`cod_veiculo` =  '$codModelo';")){
        header("location: ../intranet/cadVeiculo.php");
    }else{
        echo "Erro ao excluir!";
        header("location: ../intranet/cadVeiculo.php");
    }