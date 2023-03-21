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
    <title>Login</title>
</head>
<body>
    
    <?php
    session_start();
    if(isset($_SESSION['msg'])){
        echo "<p class=alert>$_SESSION[msg]</p>";
        unset($_SESSION['msg']);
    }
    ?>

    <fieldset id="form-login">
    <legend>Login</legend>
    <form action="login.act.php" method="post" enctype="multipart/form-data">
    <p>Email:</p>
    <input type="text" name="email">
    <p>Senha:</p>
    <input type="password" name="senha">
    <p><input type="submit" value="Entrar"></p>
    </form>
    </fieldset>
    
</body>



</html>