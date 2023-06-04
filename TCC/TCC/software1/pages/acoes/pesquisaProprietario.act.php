
<style>
    .boxVagaMorador{
        display:flex;
    }
    .boxVagaMorador input{
        padding: 20px;
    }
</style>
<?php
    $texto = $_GET['texto'];
    require('connect.php');
if (strlen($texto) >= 3) {
    $moradores = mysqli_query($con, "Select * from `tb_morador` where `nome_completo` like '%$texto%' ");
    echo "<table class='table table-hover table-bordered'>";
    echo "<tr class=tittabela>";
    echo "<th class=tittabela>Cod.</th>";
    echo "<th class=tittabela>Nome Completo</th>";
    echo "</tr >";
    while($morador = mysqli_fetch_array($moradores)){
        echo "<tr>";
        echo "<td><input type=radio name=webmaster id=codmoradorvaga value='$morador[cod_morador]'> 
              <strong>Cod.</strong> $morador[cod_morador]  </td>";
        echo "<td><strong>Cod. Salão</strong>$morador[nome_completo]  </td>";
        echo "</tr>";
 
    }
}
?>
