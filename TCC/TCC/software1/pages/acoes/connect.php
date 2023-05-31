



<?php
    if ( !@$con = mysqli_connect('localhost','root', '','bd_condmind')){
        echo "Erro ao acessar a Base de Dados";
    };
    mysqli_query($con,"SET NAMES utf8");

    /*
<?php
    if ( !@$con = mysqli_connect('localhost','u525967977_root','TccEtec2023','u525967977_bd_condmind')){
        echo "Erro ao acessar a Base de Dados";
    };
    mysqli_query($con,"SET NAMES utf8");
?>
    */
?>