<?php

if(!$con = mysqli_connect('localhost','root','','bd_livraria')){
    echo "Erro ao acessar a Base de dados!";
};
mysqli_query($con,"SET NAMES utf8");
//Banco de dados já conectado!

?>