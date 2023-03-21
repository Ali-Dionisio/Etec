<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Lista de Dados</title>
    <link rel="stylesheet" href="estilo-principal.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
   
<div class="menu">
    <?php
    include('menu.php');?> 
</div>

        <?php
    session_start();
    if (isset($_SESSION['msg'])) {
        echo "<p class=alert>$_SESSION[msg]</p>";
        unset($_SESSION['msg']);
    }

    require('connect.php');
    $contatos = mysqli_query($con, "Select * from `tb_livraria`");


    while ($contato = mysqli_fetch_array($contatos)) {
        echo "<div class=listar>";

        echo "<div class=infosListar>";
        echo "<p> Nome: $contato[Nome_Livro] </p>";
        echo "<p> Autor: $contato[Autor]</p>";
        echo "<p> Preço: $contato[Preco] </p>";
        echo "</div>";

        echo "<div class=fotoListar>";
        echo "<p><img src=$contato[foto]></p>";
        echo "</div>";

        echo "<div class=altExListar>";
        echo "<p><a href=alterar.php?cod=$contato[Codigo]>Alterar</a></p>";
        echo "<p> ㅤ </p>";
        echo "<p><a href=javascript:confirmar($contato[Codigo])>Excluir</a></p>";
        echo "</div>";

        echo "</div>";
    }

    ?>

<script>
function confirmar (codigo){
        resposta = confirm("Deseja excluir o registro "+codigo+"?");
     
        if(resposta == true){
        window.location = "excluir.php?cod="+codigo;
        }
    }
</script>


</body>

</html>