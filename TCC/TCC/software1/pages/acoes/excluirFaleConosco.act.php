<?php

require('connect.php');
extract($_POST);
$cod_msg = $_GET['cod'];


if(mysqli_query($con, "DELETE FROM `tb_fale_conosco` 
                           WHERE `tb_fale_conosco`.`cod_msg` =  '$cod_msg';")){
                                header("location: ../intranet/MeuFaleConosco.php");
                            }else{
                                echo "Erro ao excluir!";
                                header("location: ../intranet/MeuFaleConosco.php");
                            }
                            
    var_dump($_FILES);
var_dump($_POST);
