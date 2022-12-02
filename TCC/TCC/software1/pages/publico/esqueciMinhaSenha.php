<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha</title>
    <link rel="stylesheet" href="../estilo/esqueciMinhaSenha.css">
    <script src="./src/javascript.js"></script>

</head>

<body>
    <?php
    @session_start();
    if (isset($_SESSION['msg'])) {
        echo "<p class=alert> $_SESSION[msg]</p>";
        unset($_SESSION['msg']);
    }
    ?>
    <div class="mensagemLogin">
        <p>
        <h1>Seja Bem-Vindo</h1>
        <h2>Esqueceu sua senha? Podemos te ajudar </h2>
        </p>
    </div>
    <div class="logo">
        <a href="../publico/login.php">
            <img src="../imagens/shannonLogo.png" alt="logo">
        </a>
    </div>
    <div class="login">
        <form action="../acoes/esqueciMinhaSenha.act.php" method="post">
            <h1>Recupere sua senha</h1>
            <p>Digite abaixo o seu CPF</p>
            <nav>
                <p>CPF: <input type="text" name="cpf" id="cpf"></p>
            </nav>
            <p class="botoes">
                <input type="submit" class="mt-4 p-2 px-5 btn btn-primary" id="esqueciMinhaSenha" value="Proximo Etapa">
            </p>
        </form>
    </div>
</body>

</html>