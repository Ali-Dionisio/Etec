<?php require('sec.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../estilo/salao.css">
    <script src="../src/javascript.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    
</head>
<body>
<div class="barraLateral">
        <?php include('../intranet/barraLateral.php'); ?>
</div>
<?php include('../intranet/barraSuperiorInt.php'); ?>

<h1 class="titEventos">Historico de Eventos</h1>
<?php
@session_start();
if (isset($_SESSION['msg'])) {
    echo "<p class=alert> $_SESSION[msg]</p>";
    unset($_SESSION['msg']);
    $_SESSION['usuarioLogin'] = $usuario;
}
require('../acoes/connect.php');

          //Pegar o indice nna URL da página, caso não haja indice, atribua o valor 1
          $pagina = (isset($_GET['pagina'])) ?  $_GET['pagina'] : 1;   

          //Setar quantidade de itens por página
          $total_pagina = 5;
      
          //calcular o inicio da visualização
      
          $inicio = ($total_pagina * $pagina)-$total_pagina;

 


$salaos = mysqli_query($con, "SELECT * FROM `tb_hist_salao` WHERE `DATA_RESERVA`  order by data_reserva ");
echo "<table class='table table-hover table-bordered'>";
echo "<tr class=tittabela>";
echo "<th class=tittabela>Cod.</th>";
echo "<th class=tittabela>Cod_Salão</th>";
echo "<th class=tittabela>Data do Evento</th>";
echo "<th class=tittabela>Horario de inicio</th>";
echo "<th class=tittabela>Horario do fim</th>";
echo "<th class=tittabela>Nome do morador</th>";
echo "</tr >";
while ($salao = mysqli_fetch_array($salaos)) {
    $moradores = mysqli_query($con, "Select * from `tb_morador` where cod_morador = $salao[cod_morador] ");
    echo "<tr>";
    echo "<td><strong>Cod.</strong> $salao[num_hist_salao]  </td>";
    echo "<td><strong>Cod. Salão</strong> $salao[cod_salao]  </td>";
    echo "<td><strong>Data Evento</strong> $salao[data_reserva] </td>";
    echo "<td><strong>Hora Inicio</strong> $salao[hora_inicio] </td>";
    echo "<td><strong>Hora Fim</strong> $salao[hora_fim] </td>";
    while ($morador = mysqli_fetch_array($moradores)) {
        $nome = strtoupper("$morador[nome_completo]");
        $verificador = $salao['cod_morador'];
        echo "<td><strong>Morador</strong> $nome </td>";
    }
}
echo "</tr>";

echo "</table>";
?>
<?php 
  //contar o total de registros no banco de dados 
  $total_registro = mysqli_num_rows($salaos);
    
  //calcular o nuúmero de páginas necessárias para apresentar os registros;
  $num_pagina = ceil($total_registro / $total_pagina);
?>


<div class="paginacao">
 <!-- <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center"> -->
    <?php 
    //verificar a pagina anterior e posterior
    $pagina_anterior = $pagina - 1;
    $pagina_posterior = $pagina + 1;
    ?>

    <li>
        <?php 
            if($pagina_anterior != 0){  ?>
                
                <a class="link_pag" href="/software1/pages/intranet/consultarHistorico.php?pagina=<?php echo $pagina_anterior?>">Anterior</a>
             
           <?php }else{ ?>
               <a class="disabled" href="# ">Anterior</a>
          <?php } ?>
        
    </li>
  
    <?php  
      //apresentar a páginação
    //  MANUTENÇÃO  
    
    
    $num_pagina = 4;

    for($i = 1; $i < $num_pagina + 1 ; $i++){  ?>
         <a  href="/software1/pages/intranet/consultarHistorico.php?pagina=<?php  echo $i?>"><?php echo $i ?></a> 
     <?php  } ?>
     <?php 
    //  var_dump($num);
    //  var_dump($pagina_anterior);
    //  var_dump($num_pagina);
    //  var_dump($pagina_posterior);
    //  ?>   
        <li>
        <?php 
            if($pagina_posterior <= $num_pagina){  ?>
                <a class="link_pag" href="software1/pages/intranet/consultarHistorico.php?pagina=<?php echo $pagina_posterior?>">Próximo</a>
              </li>
           <?php }else{ ?>
                <a class="disabled" href="#">Próximo</a>   
            <?php   } ?>
           </li>
            </ul>
    <!-- </nav> -->
           </div>


</body>
</html>