<style>
   .mensagemCPF {
      display: flex;
      justify-content: center;
    flex-direction: column;
      border: 2px solid black;
      margin-left: 15rem;
      margin-right: 15rem;
      margin-top: 15rem;
   }
</style>
<?php

require('connect.php');
extract($_FILES);
extract($_POST);

//if (empty($foto)) {
$endereco = "../imgs/" . md5(time()) . ".jpg";
//} 

move_uploaded_file($foto['tmp_name'], $endereco);

extract($_POST);



   if (mysqli_query($con, "INSERT INTO `tb_morador` (`cod_morador`, 
                                                `primeiro_nome`, 
                                                `nome_completo`,
                                                `email`,
                                                `cpf`, 
                                                `rg`,
                                                `dtnascimento`,
                                                `celular`,
                                                `estadocivil`,
                                                `bloco`,
                                                `numero_apartamento`,
                                                `funcao`,
                                                `foto`)
VALUES (NULL, 
'$primeiro_nome',
'$nome_completo', 
'$email', 
'$cpf', 
'0000000000', 
'$dtnascimento',
'$celular', 
'$estadocivil', 
'0', 
'00',
'Morador',
'$endereco');")) {
      $msg = "<p class=sucesso>Registro gravado com Sucesso</p>";
   } else {
      $msg = "<p class=erro>Erro ao criar registro</p>";
   }
   //session_start();
   $_SESSION['msg'] = $msg;

   //var_dump($_FILES);
   //var_dump($_POST);
   echo "<div>";
   include('../publico/barraSuperiorPub.php');
   echo " <div class=mensagemCPF>";
   echo "     <h1>Parabéns pelo cadastro</h1>";
   echo "     <h2>Vá a pagina de login e efetue o seu primeiro acesso</h2>";
   echo "     <h3>Utilize da senha: admin</h3>";
   echo " </div>";
   header("Refresh:10; url=../index.php", true, 303);
   echo "</div>";