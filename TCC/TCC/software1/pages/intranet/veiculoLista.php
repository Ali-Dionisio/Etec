<?php require('sec.php') ?>
<?php require('controleAcesso.php') ?>

<link rel="stylesheet" href="../estilo/minhaVaga.css">
<?php
if ($controle['funcao'] == 'Administrador') {
    echo "<div class=tituloVaga>";
    echo "<h1>Veiculos Proprietários</h1>";
    echo "</div>";
}else{
    echo "<div class=tituloVaga>";
    echo "<h1>Minha Vaga</h1>";
    echo "</div>";
}
?>

<?php
@session_start();
if (isset($_SESSION['msg'])) {
    echo "<p class=alert> $_SESSION[msg]</p>";
    unset($_SESSION['msg']);
}
require('../acoes/connect.php');
$vagas = mysqli_query($con, "SELECT * 
                            FROM `tb_veiculo_morador` 
                            INNER JOIN tb_morador on tb_morador.cod_morador = tb_veiculo_morador.cod_morador
                            INNER JOIN tb_vaga_garagem on tb_vaga_garagem.placa_veiculo = tb_veiculo_morador.placa_veiculo
                            ");
$codusuario = $_SESSION['cod_usuario'];
echo "<table class='table table-hover 
         table-bordered'>";
echo "<tr>";
echo "<th>#</th>";
echo "<th>Placa Veiculo</th>";
echo "<th>Tipo Veiculo</th>";
echo "<th>Modelo</th>";
echo "<th>Ano</th>";
echo "<th>Cor</th>";
echo "<th>Morador</th>";
echo "<th class=acoes>Ações</th>";
echo "</tr>";
if ($controle['funcao'] == 'Administrador') {
    while ($vaga = mysqli_fetch_array($vagas)) {
    echo "<tr class=reppet>";
    echo "<td><strong>Vaga:  </strong>*</td>";
    echo "<td><strong>Vaga:  </strong> $vaga[placa_veiculo] </td>";
    echo "<td><strong>Número Vaga:  </strong> $vaga[tipo_veiculo] </td>";
    echo "<td><strong>Tipo Vaga:  </strong> $vaga[modelo] </td>";
    echo "<td><strong>Tipo Vaga:  </strong> $vaga[ano] </td>";
    echo "<td><strong>Tipo Vaga:  </strong> $vaga[cor] </td>";
    echo "<td><strong>Tipo Vaga:  </strong> $vaga[primeiro_nome] </td>";
    echo "<td class=$controleMorador>
                    <button onclick=\"location.href='alterarMinhaVaga.php?page=editar&cod=$vaga[cod_vaga]';\" class='btn btn-success'>Editar</button>

                    <button onclick=\"if(confirm('Tem certeza que deseja excluir? id: $vaga[cod_vaga]')){location.href='../acoes/excluirMinhaVaga.act.php?cod=$vaga[cod_vaga]';}else{false;}\" class='btn btn-danger'>Excluir</button>           
            </td>";
    echo "</tr>";
    } 
}

echo "</table>";
//} 
// else {
//     echo "<p> class = 'alert-danger'> Não
//         encontrou resultados</p>";
// }

?>