<?php
 
    var_dump($_FILES);
    extract($_FILES);
    extract($_POST);
    require('connect.php');
    $endereco = "imgs/".md5(time()).".jpg";
    move_uploaded_file($foto['tmp_name'],$endereco);
    if(mysqli_query($con, "INSERT INTO `tb_morador` (`cod_morador`, `primeiro_nome`, `nome_completo`, `cpf`, 
                                                    `rg`, `dtnascimento`, `celular`, `estadocivil`, `bloco`, `numero_apartamento`)
     VALUES (NULL, 
     '$primeiro_nome',
      '$nome_completo', 
      '$cpf', 
      '$rg', 
      '$dtnascimento',
       '$celular', 
                    '$estadocivil', '$bloco', '$numero_apartamento');")){
        $msg = "<p class=sucesso>Registro gravado com Sucesso</p>";
     }else{
        $msg = "<p class=erro>Erro ao criar registro</p>";
     }
     session_start();
     $_SESSION['msg'] = $msg;
    header("location:cadastroUser.php");

