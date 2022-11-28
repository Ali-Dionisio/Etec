<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/moradores.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <title>Listar Morador</title>
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
<?php include('sidebar.php'); ?>    

    <div class="pesquisar">
        <p>Pesquisar <input type="text" onKeyup="pesquisa(this.value)"></p>
    </div>
    <div class="cadastrar">
        <a href="../intranet/cadUsuario.php">Cadastrar</a>
    </div>
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
        echo "<div class=box1>";
        echo "<div class=box>";
        echo "<p> Cod. Usuário: $usuario[cod_usuario]</p>";
        echo "<p> Primeiro Nome: $usuario[nome]</p>";
        echo "</div>";
        echo "<div class=box>";
        echo "<p> Usuário: $usuario[usuario]</p>";
        echo "<p> Função: $usuario[funcao]</p>";
        echo "</div>";
        echo "<div class=box>";
        echo "<p> Senha: $usuario[senha]</p>";
        echo "</div>";
        echo "<div class=alterarExcluir>";
        echo "<p> <a href =alterar.php?cod=$usuario[cod_usuario]>Alterar</a></p>";
        echo "<p> <a href =javascript:confirmar($usuario[cod_usuario])>Excluir</a></p>";
        echo "</div>";
        echo "</div>";
        echo "<div class=risco> </div>";


    }
?>
<script>
    function confirmar(codigo) {
        resposta = confirm("Deseja excluir o registro "+codigo+"?");
        if(resposta == true){
            window.location = "excluir.php?cod="+codigo;
        }
    }
</script>
</body>
</html>