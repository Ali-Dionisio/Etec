<?php
 
    extract($_POST);
    require('../acoes/connect.php');
   
    
    if(mysqli_query($con, "UPDATE `tb_usuarios` SET 
                                    `primeiro_nome` = '$primeiro_nome',
                                    `funcao` = '$funcao'
                                    WHERE `tb_usuarios`.`cod_usuario` = '$codUsuario';")){
                                $msg = "Alterado com sucesso!";
                        }else{
                                $msg = "Erro ao alterar!";
                            }
session_start();
$_SESSION['msg'] = $msg;    
$usuarioLogin = $_SESSION['usuarioLogin'];                    
header("location:../intranet/usuarios.php");                         