<?php
     $texto = $_GET['texto'];
    require('connect.php');
    if(strlen($texto)>=3){
    $contatos = mysqli_query($con, "Select * from `tb_livraria`WHERE `Nome_Livro` like '%$texto%'");
    while($contato = mysqli_fetch_array($contatos)){
        echo "<div class= boxPesquisar>";

        echo "<div class=infosPesquisar>";
        echo "<p> Nome: $contato[Nome_Livro] </p>";
        echo "<p> Autor: $contato[Autor]</p>";
        echo "<p> Preço: $contato[Preco] </p>";
        echo "</div>";


        echo "<p><img src=$contato[foto]></p>";

        echo "<div class=altExPesquisar>";
        echo "<p><a href=alterar.php?cod=$contato[Codigo]>Alterar</a></p>";
        echo "<p> ㅤ </p>";
        echo "<p><a href=javascript:confirmar($contato[Codigo])>Excluir</a></p>";
        echo "</div>";

        echo "</div>";
    }
}
?>