<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login CondMind</title>
    <link rel="stylesheet" href="../estilo/login.css">
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
        <h2>Cadastre-se ou logue no sistema para comersarmos</h2>
        </p>
    </div>
    <div class="logo">
        <img src="../imagens/shannonLogo.png" alt="">
    </div>
    <div class="login">
        <form action="../acoes/login.act.php" method="post">
            <h1>Efetue seu acesso</h1>
            <nav>
                <p>Usuário <input type="text" name="usuario" id="usuario"></p>
                <p>Senha<input type="password" name="senha" id="senha"></p>
            </nav>
            <p class="botoes">
                <input type="submit" class="mt-4 p-2 px-5 btn btn-primary"  id="enter" value="Entrar">
            </p>
        </form>
        <div class="esqueciMinhaSenha">
            <a href="../publico/esqueciMinhaSenha.php">Esqueci Minha Senha</a>
        </div>
    </div>
</body>

</html>