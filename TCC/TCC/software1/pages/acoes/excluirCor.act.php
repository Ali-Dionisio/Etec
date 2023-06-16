<?php

require('connect.php');
extract($_POST);
$cod_cor = $_GET['cod'];


if(mysqli_query($con, "DELETE FROM `tb_cor` 
                           WHERE `tb_cor`.`cod_cor` =  '$cod_cor';")){
                                header("location: ../intranet/cadVeiculo.php");
                            }else{
                                echo "Erro ao excluir!";
                                header("location: ../intranet/cadVeiculo.php");
                            }
                            
    var_dump($_FILES);
var_dump($_POST);
