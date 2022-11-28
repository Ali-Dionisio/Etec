
<?php
    $texto = $_GET['texto'];
    require('connect.php');
    $moradores = mysqli_query($con, "Select * from `tb_morador` where `nome_completo` like '%$texto%' ");
    while($morador = mysqli_fetch_array($moradores)){
        echo "<div class=box1>";
        echo "<p><img src=$morador[foto]></p>";
        echo "<div class=box>";
        echo "<p> Primeiro Nome: $morador[primeiro_nome]</p>";
        echo "<p> Nome: $morador[nome_completo]</p>";
        echo "</div>";
        echo "<div class=box>";
        echo "<p> CPF: $morador[cpf]</p>";
        echo "<p> RG: $morador[rg]</p>";
        echo "<p> Data de Nascimento: $morador[dtnascimento]</p>";
        echo "</div>";
        echo "<div class=box>";
        echo "<p> Celular: $morador[celular]</p>";
        echo "<p> Estado Civil: $morador[estadocivil]</p>";
        echo "<p> Bloco: $morador[bloco]</p>";
        echo "<p> Nº: $morador[numero_apartamento]</p>";
        echo "</div>";
        echo "<div class=alterarExcluir>";
        echo "<p> <a href =alterar.php?cod=$morador[cod_morador]>Alterar</a></p>";
        echo "<p> <a href =javascript:confirmar($morador[cod_morador])>Excluir</a></p>";
        echo "</div>";
        echo "</div>";
        echo "<div class=risco> </div>";
    }
?>