<?php require('sec.php') ?>


<h1>Listar Usuários</h1>
<?php
@session_start();
    if(isset($_SESSION['msg'])){
        echo "<p class=alert> $_SESSION[msg]</p>";
        unset($_SESSION['msg']);
    }
require('../acoes/connect.php');

$vagas = mysqli_query($con, "Select * from `tb_vaga_garagem` order by num_vaga ");

echo "<table class='table table-hover 
         table-bordered'>";
         echo "<tr>";
         echo "<th>#</th>";
         echo "<th>Número da Vaga</th>";
         echo "<th>Tipo da Vaga</th>";
         echo "<th>Situação da Vaga</th>";
         echo "<th>Placa do Veículo</th>";
         echo "<th>Ações</th>";
         echo "</tr>";
    while($vaga = mysqli_fetch_array($vagas)){
    $moradores = mysqli_query($con, "Select * from `tb_morador` where cod_morador = $vaga[cod_morador]" );
        echo "<tr>";
        echo "<td> $vaga[cod_vaga] </td>";
        echo "<td> $vaga[num_vaga] </td>";
        echo "<td> $vaga[tipo_vaga] </td>";
        echo "<td> $vaga[ocupada] </td>";
        echo "<td> $vaga[placa_veiculo] </td>";
        
        echo "<td>
                    <button onclick=\"location.href='alterarReservaSalao.php?page=editar&cod=$vaga[cod_vaga]';\" class='btn btn-success'>Editar</button>

                    <button onclick=\"if(confirm('Tem certeza que deseja excluir? id: $vaga[vaga]')){location.href='../acoes/excluirReservaSalao.act.php?cod=$vaga[cod_vaga]';}else{false;}\" class='btn btn-danger'>Excluir</button>           
            </td>";
        echo "</tr>";
    }
    echo "</table>";
//} 
// else {
//     echo "<p> class = 'alert-danger'> Não
//         encontrou resultados</p>";
// }

?>
