<?php require('sec.php') ?>
<?php require('controleAcesso.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/shannon.css">
    <link rel="stylesheet" href="../estilo/cadastro.css">
    <script src="../src/javascript.js"></script>

    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <script src="../jquery/jquery.mask.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="../imagens/CondMind_arredondado.png"/>
    <title>Condmind</title>
</head>
<body>  
<div class="barraLateral">
        <?php include('../intranet/barraLateral.php'); ?>
</div>
<?php include('../intranet/barraSuperiorInt.php'); 


@session_start();
if (isset($_SESSION['msg'])) {
    echo "<p class=alert>$_SESSION[msg]</p>";
    unset($_SESSION['msg']);
}
echo "<div class=geral>";

$codMorador = $_SESSION['cod_morador'];
require('../acoes/connect.php');
?>
  <div class="mt-2 container text-center">
        <div class="row ">
            <div class="col">
                <!--  primeira coluna -->
                <div class="imglogo">
                    <div class="imagemPromocional">
                    <h1>Fale Conosco - Histórico</h1>
                        <img src="../imagens/fotoReserva2.png" alt="" srcset="">
                    </div>
                </div>
            </div>
            <div class="cadastro col mt-3">
                <!--Segunda coluna -->
<?php
    $busca = mysqli_query($con, "SELECT * FROM `tb_fale_conosco` fale
    LEFT JOIN tb_morador mor on mor.cod_morador = fale.cod_morador
    $meuFaleConosco
    ");
while ($morador = mysqli_fetch_array($busca)) {
echo "<div class=textoImgFC>";
echo "<nav class=ImgFC>";
echo "<img src= $morador[foto] class=imgUsuario srcset=>";
echo "</nav>";
echo "<nav >";
echo "<h5> <strong> Cod.: $morador[cod_msg]</strong>";
echo "<input type=hidden id=cod_msg value=$morador[cod_msg]> ";
echo "<h5> <strong> Nome: $morador[nome_completo]</strong>";
echo "<h5> <strong> E-mail: </strong>$morador[email]";
echo "<h5> <strong> Celular: </strong>$morador[celular]";
echo "<h5> <strong> Via: </strong>$morador[via]";
echo "<h5> <strong> Assunto: </strong>$morador[assunto]";
echo "</nav>";
echo "<nav >";
echo "</nav>";
echo "<nav>";
echo "<strong> Mensagem: </strong>";
echo "<textarea name=mensagem id=msgFCaaa cols=30 rows=10 disabled=>    $morador[mensagem]    </textarea>";
echo "</nav>";
echo "</div>";
echo "<button type=button onclick=teste($morador[cod_msg]) class=btnFaleConosco btn btn-primary data-toggle=modal data-target=#exampleModalCenter>
Responder
</button>";
echo "
<a href =javascript:confirmar($morador[cod_msg])>
  <button type=button class=btnExcluirFaleConosco btn btn-danger data-toggle=modal data-target=# onclick=escolheMensagem()>
    Excluir
  </button>
  </a>";
}
echo "</div>";
?>
            </div>
        </div>
    </div>
    </div>



    <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Resposta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <?php
            require('../acoes/connect.php');
            $busca = mysqli_query($con, "Select * from `tb_fale_conosco` fale $meuFaleConosco");
            echo "<form action=../acoes/responderMensagem.act.php method=post id=>";
            echo "<table class='table table-hover table-bordered'>";
            echo "<tr class=tittabela>";
            echo "<th class=tittabela>Cod.</th>";
            echo "<th class=tittabela>Mensagem</th>";
            echo "</tr >";
            while ($faleconosco = mysqli_fetch_array($busca)) {
                echo "<tr>";
                echo "<td><input type=radio name=cod_msg id=cod_msg value='$faleconosco[cod_msg]'> $faleconosco[cod_msg]  </td>";
                echo "<td><textarea cols=30 rows=10 name=mensagem value=$faleconosco[mensagem]> $faleconosco[mensagem] </textarea></td>";
              }
              echo "</tr>";
              
              echo "</table>";
              echo"            <button type=submit class=btn-enviar>Alterar</button>";
              echo"</form>";
          
          ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div> 
  </div>
</div>
<script>

function confirmar(codigo) {
            resposta = confirm("Deseja excluir o registro " + codigo + "?");
            if (resposta == true) {
                window.location = "../acoes/excluirFaleConosco.act.php?cod=" + codigo;
            }
        }
        function teste(codigo) {      
            console.log(codigo);



        }
        </script>
</body>
</html>