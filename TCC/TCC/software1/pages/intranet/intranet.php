<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intranet</title>
    <style>
         body{
        background-image: url("../imagens/PORTARIA.jpg");
        background-repeat: no-repeat;    
        background-size: 100vw 100vh;
        background-position: top;
        background-attachment: fixed;
    }
    </style>
</head>
<body>
<?php include('./sidebar.php'); ?>    
<?php
    @session_start();
    if(isset($SESSIONS['msg'])){
        echo "<p class=alert> $_SESSION</p>";
        unset($_SESSION['msg']);
    }

echo "<div class=bemvindo>";
echo "<h1>Bem Vindo, $_SESSION[nome] </h1>";
echo "</div>";
?>
</body>
</html>