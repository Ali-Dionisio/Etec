<?php
require('connect.php');
extract($_POST);
extract($_FILES);

if ($foto['size'] > 0) {
    if ($foto_anterior == "") {
        $endereco = "imgs/" . md5(time()) . ".jpg";
    } else {
        $endereco = $foto_anterior;
    }
    move_uploaded_file($foto['tmp_name'], $endereco);
} else {
    $endereco = $foto_anterior;
}

if (mysqli_query($con, "UPDATE `tb_livraria` SET
                                `Nome_Livro`='$nome_livro',
                                `Autor`='$autor',
                                `Preco`='$preco',
                                `foto`='$endereco'
                                WHERE
                                `tb_livraria` . `Codigo` = '$codigo';")) {
    $msg = "<p class= sucesso> Alterado com sucesso!</p>";
} else {
    $msg = "Erro ao alterar!";
}

session_start();
$_SESSION['msg'] = $msg;
header("location:listar.php");
