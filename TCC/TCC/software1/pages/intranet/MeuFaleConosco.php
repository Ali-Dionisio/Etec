<?php require('sec.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/shannon.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="../imagens/CondMind_arredondado.png"/>
    <title>Condmind</title>
</head>
<body>  
<div class="barraLateral">
        <?php include('../intranet/barraLateral.php'); ?>
</div>
<?php include('../intranet/barraSuperiorInt.php'); 


@session_start();
if (isset($_SESSION['msg'])) {
    echo "<p class=alert>$_SESSION[msg]</p>";
    unset($_SESSION['msg']);
}
echo "<div class=geral>";

$codMorador = 1; // $_GET['cod'];
require('../acoes/connect.php');
$busca = mysqli_query($con, "SELECT * FROM `tb_fale_conosco` fale
                                 LEFT JOIN tb_morador mor on mor.cod_morador = fale.cod_morador
                                 ");
    while ($morador = mysqli_fetch_array($busca)) {
    echo "<div class=textoImgFC>";
        echo "<nav class=ImgFC>";
            echo "<img src= $morador[foto] class=imgUsuario srcset=>";
        echo "</nav>";
        echo "<nav >";
            echo "<h5> <strong> Nome: $morador[nome_completo]</strong>";
            echo "<h5> <strong> E-mail: </strong>$morador[email]";
            echo "<h5> <strong> Celular: </strong>$morador[celular]";
            echo "<h5> <strong> Via: </strong>$morador[via]";
            echo "<h5> <strong> Assunto: </strong>$morador[assunto]";
        echo "</nav>";
        echo "<nav >";
    echo "</nav>";
    echo "<nav>";
    echo "<strong> Mensagem: </strong>";
    echo "<textarea name= id= cols=30 rows=10>    $morador[mensagem]    </textarea>";
    echo "</nav>";
    echo "</div>";

    }
    echo "</div>";

    ?>

</body>
</html>