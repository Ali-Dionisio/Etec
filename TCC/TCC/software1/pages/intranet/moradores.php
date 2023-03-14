<?php require('sec.php') ?>

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
<?php include('./barraSuperiorInt.php'); ?>    

    <div class="pesquisar">
        <p>Pesquisar <input type="text" onKeyup="pesquisa(this.value)"></p>
    </div>
    <div class="cadastrar">
        <a href="../intranet/cadMorador.php">Cadastrar novo morador</a>
    </div>
    <div id="result"></div>
    
<?php
    @session_start();
    if(isset($_SESSION['msg'])){
        echo "<p class=alert> $_SESSION[msg]</p>";
        unset($_SESSION['msg']);
    }
    require('../acoes/connect.php');
    $moradores = mysqli_query($con, "Select * from `tb_morador`");
    while($morador = mysqli_fetch_array($moradores)){
        echo "<div class=box1>";
        echo "<div class=caixaImagem>";
        echo "<p><img class=imgUsuario src=$morador[foto]></p>";
        echo "</div>";
        echo "<p class=cod> Codigo Morador: $morador[cod_morador]</p>";
        echo "<div class=box>";
        echo "<p> Primeiro Nome: $morador[primeiro_nome]</p>";
        echo "<p> Nome: $morador[nome_completo]</p>";
        echo "</div>";
        echo "<div class=box>";
        echo "<p> CPF: $morador[cpf]</p>";
        echo "<p> Função: $morador[funcao]</p>";
        echo "</div>";
        echo "<div class=box>";
        echo "<p> RG: $morador[rg]</p>";
        echo "<p> Bloco: $morador[bloco]</p>";
        echo "</div>";
        echo "<div class=box>";
        echo "<p> Celular: $morador[celular]</p>";
        echo "<p> Nº: $morador[numero_apartamento]</p>";
        echo "</div>";
        echo "<div class=box>";
        echo "<p> E-mail: $morador[email]</p>";
        echo "</div>";
        echo "<div class=box>";
        echo "<p> Data de Nascimento: $morador[dtnascimento]</p>";
        echo "</div>";
        echo "<div class=box>";
        echo "<p> Estado Civil: $morador[estadocivil]</p>";
        echo "</div>";
        echo "<div class=alterarExcluir>";
        echo "<p> <a href =alterarMorador.php?cod=$morador[cod_morador]>Alterar</a></p>";
        echo "<p> <a href =javascript:confirmar($morador[cod_morador])>Excluir</a></p>";
        echo "</div>";
        echo "</div>";
        echo "<div class=risco> </div>";


    }
?>
<script>
    function confirmar(codigo) {
        resposta = confirm("Deseja excluir o registro "+codigo+"?");
        if(resposta == true){
            window.location = "../acoes/excluirMorador.act.php?cod="+codigo;
        }
    }
</script>
</body>
</html>