<?php
 
   require('connect.php');
 
    var_dump($_FILES);
    var_dump($_POST);
   
    extract($_FILES);
    extract($_POST);
    $endereco = "imgs/".md5(time()).".jpg";
    move_uploaded_file($foto['tmp_name'],$endereco);
    var_dump($endereco);
    if(mysqli_query($con, "INSERT INTO `tb_morador` (`cod_morador`, `primeiro_nome`, `nome_completo`, `cpf`, 
                                                    `rg`, `dtnascimento`, `celular`, `estadocivil`, `bloco`, `numero_apartamento`,`foto`)
     VALUES (NULL, 
     '$primeiro_nome',
      '$nome_completo', 
      '$cpf', 
      '$rg', 
      '$dtnascimento',
      '$celular', 
      '$estadocivil', 
      '$bloco', 
      '$numero_apartamento',
      '$endereco');")){
        $msg = "<p class=sucesso>Registro gravado com Sucesso</p>";
     }else{
        $msg = "<p class=erro>Erro ao criar registro</p>";
     }
     session_start();
     $_SESSION['msg'] = $msg;
   //header("location:cadastroUser.php");

