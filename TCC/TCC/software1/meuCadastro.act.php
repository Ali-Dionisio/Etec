<?php
    var_dump($_FILES);
    extract($_FILES);
    extract($_POST);
    require('connect.php');
    if($foto['size'] > 0){
        if($foto_anterior == ""){
            $endereco = "imgs/".md5(time()).".jpg";
        }else{
            $endereco = $foto_anterior;
        }
        move_uploaded_file($foto['tmp_name'], $endereco);
    }else{
            $endereco = $foto_anterior;
    }

    if(mysqli_query($con, "UPDATE `bd_condmind` SET
                                `primeiro_nome` = '$primeiro_nome',
                                `nome_completo` = '$nome_completo',
                                `cpf` = '$cpf',
                                `rg` = '$rg',
                                `dtnascimento` = '$dtnascimento',
                                `celular` = '$celular',
                                `estadocivil` = '$estadocivil',
                                `bloco` = '$bloco',
                                `numero_apartamento` = '$numero_apartamento'
                                WHERE `tb_morador`.`cod_morador` = '$cod_morador';")){
                            $msg = "Alterado com sucesso!";
                        }else{
                            $msg = "Erro ao alterar!";
                        }
session_start();
$_SESSION['msg'] = $msg;                        
header("location:meuCadastro.php");                        
