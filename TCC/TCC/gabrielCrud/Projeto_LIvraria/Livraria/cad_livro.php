<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilo-principal.css">
    <link rel="stylesheet" href="style.css">

    <title>Cadastrar Livro</title>
</head>

<body>

    <?php
    session_start();
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    include('menu.php');
    ?>

    <fieldset id="form-cad-livro">
        <legend>Cadastrar novo livro</legend>

        <form action="cad_livro.act.php" method="post" enctype="multipart/form-data">

            <p>Nome:</p>
            <input type="text" name="nome_livro" id="" placeholder="digite o nome do livro">
            <p>Autor(a):</p>
            <input type="text" name="autor" id="" placeholder="digite o(a) autor(a) do livro">
            <p>Preço:</p>
            <input type="text" name="preco" id="" class="Tel" placeholder="R$000,00" value="R$">

            <p><label for="fileFoto" id="lblFoto">Coloque uma foto do livro</label></p>

            <input type="file" name="foto" id="fileFoto">

            <input type="submit" value="Gravar" id="fileGravar">
        </form>
    </fieldset>


</body>

</html>