<?php require('sec.php') ?>


<h1>Listar Usuários</h1>
<?php
@session_start();
if (isset($_SESSION['msg'])) {
    echo "<p class=alert> $_SESSION[msg]</p>";
    unset($_SESSION['msg']);
}
require('../acoes/connect.php');

$sql = "SELECT * FROM tb_salao";
$res = $con->query($sql);
$qtd = $res->num_rows;




$busca = mysqli_query($con, "SELECT primeiro_nome FROM tb_morador WHERE tb_morador.cod_morador = '1'");
$nomeMorador = mysqli_fetch_array($busca);


if ($qtd > 0) {
    print "<table class='table table-hover 
         table-bordered'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Data do Evento</th>";
    print "<th>Horario de inicio</th>";
    print "<th>Horario do fim</th>";
    print "<th>Nome do morador</th>";
    print "<th>Ações</th>";
    print "</tr>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->cod_salao . "</td>";
        print "<td>" . $row->data_reserva . "</td>";
        print "<td>" . $row->hora_inicio . "</td>";
        print "<td>" . $row->hora_inicio . "</td>";
        print "<td>" . "$nomeMorador[primeiro_nome]" . "</td>";
        print "<td>
                    <button onclick=\"location.href='?page=editar&id=" . $row->cod_salao . "';\" class='btn btn-success'>Editar</button>

                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=" . $row->cod_salao . "';}else{false;}\" class='btn btn-danger'>Excluir</button>           
            </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<p> class = 'alert-danger'> Não
        encontrou resultados</p>";
}
?>