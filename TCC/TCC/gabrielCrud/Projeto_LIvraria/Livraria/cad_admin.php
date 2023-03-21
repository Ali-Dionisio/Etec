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

    <title>Cadastrar Adm</title>
</head>

<body>

    <fieldset id="form-cad-livro">
        <legend>Cadastrar novo Admin</legend>

        <form action="cad_admin.act.php" method="post" enctype="multipart/form-data">
            <p>Nome:</p>
            <input type="text" name="nome_adm" id="">
            <p>Email: </p>
            <input type="text" name="email" id="">
            <p>Senha:</p>
            <input type="password" name="senha" id="">
            <input type="submit" value="Gravar" id="fileGravar">

        </form>
    </fieldset>

</body>

</html>