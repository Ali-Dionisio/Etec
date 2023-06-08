
<style>
    .boxVagacor{
        display:flex;
    }
    .boxVagacor input{
        padding: 20px;
    }
</style>
<?php
    $texto = $_GET['texto'];
    require('connect.php');
if (strlen($texto) >= 3) {
    $cores = mysqli_query($con, "Select * from `tb_cor` where `descricao_cor` like '%$texto%' ");
    echo "<table class='table table-hover table-bordered'>";
    echo "<tr class=tittabela>";
    echo "<th class=tittabela>Cod.</th>";
    echo "<th class=tittabela>Cor</th>";
    echo "</tr >";
    while($cor = mysqli_fetch_array($cores)){
        echo "<tr>";
        echo "<td><input type=radio name=webmaster id=codcorvaga value='$cor[cod_cor]'> 
              <strong>Cod.</strong> $cor[cod_cor]  </td>";
        echo "<td><strong>Cod. Salão</strong>$cor[descricao_cor]  </td>";
        echo "</tr>";
 
    }
}
?>
