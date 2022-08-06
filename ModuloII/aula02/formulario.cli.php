<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="src/jquery-3.6.0.min.js"></script>
    <script src="src/jQuery-Mask-Plugin-master/src/jquery.mask.js"></script>
    <link rel="stylesheet" href="style/styleIntranet.css">
</head>
<body>
    <div  class="formulario">
        <h1>Usuario cadastrado</h1>
    <?php
        extract($_POST);
        
        echo "<p>O nome é: $txtNome </p>";
        echo "<p>O CPF é: $txtCpf </p>";
        echo "<p>O sexo é: $sexo </p>";
        echo "<p>O nascto é: $nascto </p>";
        echo "<p>O endereco é: $txtEndereco </p>";
        echo "<p>O endereco é: $txtNum </p>";
        echo "<p>O CEP é: $txtCep </p>";
        echo "<p>O celular é: $txtCelular </p>";
        echo "<p>O telefone é: $txtTelefone </p>";
        echo "<p>O e-mail é: $txtEmail </p>";
        foreach($cargo as $c){
            echo "<p>O cargo é: $c</p>";
        }
        foreach($salario as $c){
            echo "<p>O cargo é: $c</p>";
        }
        //var_dump($cargo);
        echo "<p>O sobre é: $txtSobre </p>";

        
    ?>
        </div>

</body>
</html>