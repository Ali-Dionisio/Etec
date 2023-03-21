<?php
        echo $codigo = $_GET['cod'];
        require('connect.php');
        extract($_POST);
        if(mysqli_query($con, "DELETE FROM `tb_livraria` 
        WHERE `tb_livraria`.`Codigo` = '$codigo';")){
                header("location:listar.php");
        }else{
                echo("Erro ao excluir!");
        }

?>