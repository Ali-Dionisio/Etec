<?php require('sec.php') ?>
<?php require('controleAcesso.php') ?>

<link rel="stylesheet" href="../estilo/minhaVaga.css">
<div class="tituloVaga">
    <h1>Minha Vaga</h1>
</div>
<?php
@session_start();
if (isset($_SESSION['msg'])) {
    echo "<p class=alert> $_SESSION[msg]</p>";
    unset($_SESSION['msg']);
}
require('../acoes/connect.php');
$vagas = mysqli_query($con, "Select * from `tb_vaga_garagem` order by num_vaga ");
$codusuario = $_SESSION['cod_usuario'];
var_dump($codusuario);
echo "<table class='table table-hover 
         table-bordered'>";
echo "<tr>";
echo "<th>#</th>";
echo "<th>Nº da Vaga</th>";
echo "<th>Tipo Vaga</th>";
echo "<th>Usuário</th>";
echo "<th>Placa do Veículo</th>";
echo "<th class=acoes>Ações</th>";
echo "</tr>";
while ($vaga = mysqli_fetch_array($vagas)) {
     if ($controle['funcao'] == 'Administrador') {
    $usuarios = mysqli_query($con, "Select * from `tb_usuarios` where cod_usuario = $vaga[ocupada]");
    echo "<tr class=reppet>";
    echo "<td><strong>Vaga:  </strong> $vaga[cod_vaga] </td>";
    echo "<td><strong>Número Vaga:  </strong> $vaga[num_vaga] </td>";
    echo "<td><strong>Tipo Vaga:  </strong> $vaga[tipo_vaga] </td>";
    while ($usuario = mysqli_fetch_array($usuarios)) {
        $nome = strtoupper("$usuario[primeiro_nome]");
        echo "<td><strong>Usuário:  </strong>$vaga[ocupada] -  $nome </td>";
    }
    echo "<td><strong>Placa Veic:  </strong> $vaga[placa_veiculo] </td>";

    echo "<td class=$controleMorador>
                    <button onclick=\"location.href='alterarMinhaVaga.php?page=editar&cod=$vaga[cod_vaga]';\" class='btn btn-success'>Editar</button>

                    <button onclick=\"if(confirm('Tem certeza que deseja excluir? id: $vaga[cod_vaga]')){location.href='../acoes/excluirMinhaVaga.act.php?cod=$vaga[cod_vaga]';}else{false;}\" class='btn btn-danger'>Excluir</button>           
            </td>";
    echo "</tr>";
    } 
    
    else if ($controle['funcao'] == 'Morador'){
        $usuarios = mysqli_query($con, "Select * from `tb_usuarios` where cod_usuario = $vaga[ocupada]");
        $garagens = mysqli_query($con, "Select * from `tb_vaga_garagem` where ocupada = $codusuario");
        while ($garagem = mysqli_fetch_array($garagens)) {
        echo "<tr class=reppet>";
        echo "<td><strong>Vaga:  </strong> $garagem[cod_vaga] </td>";
        echo "<td><strong>Número Vaga:  </strong> $garagem[num_vaga] </td>";
        echo "<td><strong>Tipo Vaga:  </strong> $garagem[tipo_vaga] </td>";
        while ($usuario = mysqli_fetch_array($usuarios)) {
            $nome = strtoupper("$usuario[primeiro_nome]");
            echo "<td><strong>Usuário:  </strong>$garagem[ocupada] -  $nome </td>";
        }
        echo "<td><strong>Placa Veic:  </strong> $garagem[placa_veiculo] </td>";
        echo "<td class=> 
                    <button onclick=\"location.href='alterarMinhaVaga.php?page=editar&cod=$garagem[cod_vaga]';\" class='btn btn-success'>Editar</button>

                    <button onclick=\"if(confirm('Tem certeza que deseja excluir? id: $garagem[cod_vaga]')){location.href='../acoes/excluirMinhaVaga.act.php?cod=$garagem[cod_vaga]';}else{false;}\" class='btn btn-danger'>Excluir</button>           
            </td>";
        echo "</tr>";
    }
    }
}
echo "</table>";
//} 
// else {
//     echo "<p> class = 'alert-danger'> Não
//         encontrou resultados</p>";
// }

?>