<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
</head>
<body>
<?php include('menu.php');?>

<?php
    $codigo = $_GET['cod'];
    require('connect.php');
    $busca = mysqli_query($con, "Select * from `tb_livraria` where `Codigo` = '$codigo'");
    $contato = mysqli_fetch_array($busca);

    echo "<div class=nomeAlterarLivro>";
    echo "<p> O livro que você está alterando é: </p>", $contato['Nome_Livro'];
    echo "</div>";

?>



  <fieldset id="form-cad-livro">
        <legend>Alterar livro</legend>

        <form action="alterar.act.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="codigo" value="<?php echo $contato['Codigo']; ?>">
                <input type="hidden" name="foto_anterior" value="<?php echo $contato['foto']; ?>">
            <p>Nome:</p>
            <input type="text" name="nome_livro" id="" placeholder="digite o nome do livro">
            <p>Autor(a):</p>
            <input type="text" name="autor" id="" placeholder="digite o(a) autor(a) do livro">
            <p>Preço:</p>
            <input type="text" name="preco" id="" class="Tel" placeholder="R$000,00" value="R$">

            <p><label for="fileFoto" id="lblFoto">Coloque uma foto do livro</label></p>

            <input type="file" name="foto" id="fileFoto">

            <input type="submit" value="Gravar">
        </form>
    </fieldset>



</body>
</html>


