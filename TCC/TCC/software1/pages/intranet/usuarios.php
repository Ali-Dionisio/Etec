<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/moradores.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <title>Listar Usuários</title>
    <script>
        function pesquisa(texto){
            $.ajax({
                type: "post",
                url: "../acoes/pesquisa.act.php?texto="+texto,
                success: function(response){
                    $('#result').html(response);
                }
            });
        };
    </script>
</head>
<body>
<?php include('../intranet/barraSuperiorInt.php'); ?>    

    <div class="pesquisar">
        <p>Pesquisar <input type="text" onKeyup="pesquisa(this.value)"></p>
    </div>
    <!-- <div class="cadastrar">
        <a href="../intranet/cadUsuario.php">Cadastrar</a>
    </div> -->
    <div id="result"></div>
    
<?php
    @session_start();
    if(isset($_SESSION['msg'])){
        echo "<p class=alert> $_SESSION[msg]</p>";
        unset($_SESSION['msg']);
    }

    require('../acoes/connect.php');
    $usuarios = mysqli_query($con, "Select * from `tb_usuarios`");
    while($usuario = mysqli_fetch_array($usuarios)){
        echo "<div class=box2>";
        
        echo "<div class=box1>";
        echo "<div class=box>";
        echo "<p> Cod. Usuário:<b> $usuario[cod_usuario]</b></p>";
        echo "<p> Primeiro Nome:<b> $usuario[primeiro_nome]</b></p>";
        echo "</div>";
        echo "<div class=box>";
        echo "<p> Usuário:<b> $usuario[usuario]</b></p>";
        echo "<p> Função:<b> $usuario[funcao]</b></p>";
        echo "</div>";
        echo "<div class=box>";
        echo "<p> Senha:<b> $usuario[senha]</b></p>";
        echo "</div>";
        echo "<div class=alterarExcluir>";
        echo "<p class=alterar> <a href =alterarUsuario.php?cod=$usuario[cod_usuario]>Alterar</a></p>";
        echo "<p class=excluir> <a href =javascript:confirmar($usuario[cod_usuario])>Excluir</a></p>";
        echo "</div>";
        echo "</div>";
        echo "<div class=risco> </div>";
        echo "</div>";



    }
?>
<script>
    function confirmar(codigo) {
        resposta = confirm("Deseja excluir o registro "+codigo+"?");
        if(resposta == true){
            window.location = "../acoes/excluirUsuario.act.php?cod="+codigo;
        }
    }
</script>
</body>
</html>