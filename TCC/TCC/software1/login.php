<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="./estilo/login.css">
    <script src="./src/javascript.js"></script>
</head>
<body>
    <div class="mensagemLogin">
        <p><h1>Seja Bem-Vindo</h1>
        <h2>Cadastre-se ou logue no sistema para comersarmos</h2></p>
    </div>
    <div class="logo">
        <img src="./imagens/shannonLogo.png" alt="">
    </div>
    <div class="login">
        <h1>Efetue seu acesso</h1>
        <nav>
            <p>Usuário <input type="text" name="acesso" id="senha"></p>
            <p>Senha<input type="password" name="senha" id="senha"></p>
        </nav>
        <p class="botoes">
            <button id="enter" onclick="enter()">Enter</button>
            <button id="enter" onclick="cadastro()">Cadastrar</button>
        </p>    
    </div>

</body>
</html>