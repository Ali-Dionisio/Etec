<?php require('sec.php') ?>


<h1>Listar Usuários</h1>
<?php
@session_start();
    if(isset($_SESSION['msg'])){
        echo "<p class=alert> $_SESSION[msg]</p>";
        unset($_SESSION['msg']);
        $_SESSION['usuarioLogin'] = $usuario;

    }
require('../acoes/connect.php');

$salaos = mysqli_query($con, "Select * from `tb_salao` order by data_reserva ");

echo "<table class='table table-hover table-bordered'>";
echo "<tr>";
echo "<th>#</th>";
echo "<th>Data do Evento</th>";
echo "<th>Horario de inicio</th>";
echo "<th>Horario do fim</th>";
echo "<th>Nome do morador</th>";
echo "<th>Ações</th>";
echo "</tr>";
while($salao = mysqli_fetch_array($salaos)){
$moradorQueLogou = mysqli_query($con, "Select * from `tb_morador` where cpf = $usuario" );
$moradorLogado = mysqli_fetch_array($moradorQueLogou);
$moradores = mysqli_query($con, "Select * from `tb_morador` where cod_morador = $salao[cod_morador]" );
        echo "<tr>";
        echo "<td> $salao[cod_salao]  </td>";
        echo "<td> $salao[data_reserva] </td>";
        echo "<td> $salao[hora_inicio] </td>";
        echo "<td> $salao[hora_fim] </td>";
        while($morador = mysqli_fetch_array($moradores)){
            $nome = strtoupper("$morador[primeiro_nome]");
            echo "<td> $nome </td>";


        }
        if( $moradorLogado['cod_morador'] <> isset($morador['cod_morador']) ){          
        echo "<td>
                    <button onclick=\"location.href='alterarReservaSalao.php?page=editar&cod=$salao[cod_salao]';\" class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir? id: $salao[cod_salao]')){location.href='../acoes/excluirReservaSalao.act.php?cod=$salao[cod_salao]';}else{false;}\" class='btn btn-danger'>Excluir</button>           
            </td>";
    }else{
       echo "<td> aqui </td>";
    }
        echo "</tr>";
    }
    echo "</table>";
//