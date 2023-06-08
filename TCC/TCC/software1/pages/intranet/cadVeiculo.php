<?php require('sec.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CondMind</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script> -->
    <!-- <script src="src/jquery-3.6.0.min.js"></script>
        <script src="src/jQuery-Mask-Plugin-master/src/jquery.mask.js"></script> -->
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="../estilo/minhaVaga.css">
    <script>
        function pesquisarProprietario(texto){
            $.ajax({
                type: "post",
                url: "../acoes/pesquisaProprietario.act.php?texto="+texto,
                success: function(response){
                    $('#result').html(response);
                }
            });
        };
    </script>
</head>

<body>
    <div class="barraLateral">
        <?php include('../intranet/barraLateral.php'); ?>
    </div>
    <?php include('../intranet/barraSuperiorInt.php'); ?>

    <?php
    @session_start();
    if (isset($_SESSION['msg'])) {
        echo "<p class=alert>$_SESSION[msg]</p>";
        unset($_SESSION['msg']);
    }
    ?>
    <div class="mt-5 container text-center">
        <div class="row ">
            <div class="col">
                <!--  primeira coluna -->
                <div class="imglogo">
                    <label>
                        <h1>Cadastrar Veiculo</h1>
                        <div class="imagemPromocional">
                            <img src="../imagens/avatarCadastrarVeiculo.png" alt="" srcset="">
                        </div>
                    </label>
                </div>
            </div>
            <div class="cadastro col mt-3">
                <!--Segunda coluna -->

                <form class=" mt-5 row g-3 " action="../acoes/cadVeiculo.act.php" method="post" id="">

                    <div class="col-md-4">

                        <label for="placa_veiculo" class="form-label">Placa do Veículo</label>
                        <input type="text" name="placa_veiculo" class="form-select2">

                    </div>
                    <hr>
                    <div class="col-md-4">
                        <label for="tipo_veiculo" class="form-label">Tipo do Veículo</label>
                        <select type="text" name="tipo_veiculo" class="form-select2">
                            <option>Selecione o tipo de veículo</option>
                            <option>Carro</option>
                            <option>Moto</option>
                        </select>
                    </div>
                    <hr>
                    <div class="col-md-4">
                        <label for="modelo" class="form-label">Modelo do Veículo</label>

                        <select type="text" name="modelo" class="form-select2">
                            <option select></option>

                            <?php
                            $sql = "SELECT * FROM tb_veiculo";
                            $result = $con->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value=$row[modelo_veiculo]> <br> Cod.: " .  $row["cod_veiculo"] . " - Modelo: " . $row["modelo_veiculo"] . "<br> </option>";
                                }
                            } else {
                                echo "0 results";
                            }

                            ?>
                        </select>
                    </div>
                    <hr>
                    <!-- Botão para acionar modal -->
                    <div class=botaoCadastrarOpcao>
                        <button type="button" class="btn btn-primary" id="botaomodelo" data-toggle="modal" data-target="#modeloVeiculo">Cadastrar Modelo                   </button>
                    </div>
                    <div class="col-md-4">
                        <label for="ano" class="form-label">Ano do Veículo</label>
                        <select type="text" name="ano" class="form-select2">
                            <option>Selecione um ano</option>
                            <?php
                            for ($i = 2023; $i >= 1950; $i--) {
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <hr>
                    <div class="col-md-4">
                        <label for="cor" class="form-label">Cor do Veículo</label>
                        <select type="text" name="cor" class="form-select2">
                         <option select></option>
                            <?php
                            $sql = "SELECT * FROM tb_cor";
                            $result = $con->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value=$row[descricao_cor]> <br> Cod.: " .  $row["cod_cor"] . " - Cor: " . $row["descricao_cor"] . "<br> </option>";
                                }
                            } else {
                                echo "0 results";
                            }
                            
                            ?>
                        </select>
                    </div>
                    <hr>
                    <div class=botaoCadastrarOpcao>
                        <button type="button" class="btn btn-primary" id="botaomodelo" data-toggle="modal" data-target="#modeloCor">Cadastrar Cor                   </button>
                    </div>
                    <div class=" col-md-4">
                            <label for="cod_morador" class="form-label">Código Proprietário</label>
                            <input type="text" name="cod_morador" id="cod_morador" class="form-select2">
                    </div>
                    <hr>
                    <div class=botaoCadastrarOpcao>
                        <button type="button" class="btn btn-primary" id="botaomodelo" data-toggle="modal" data-target="#proprietario">Buscar Proprietário                   </button>
                    </div>
                    <div class=" col-12 ">
                        <button type=" submit" class="btn-enviar">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    
<!-- Modal Modelo-->
<div class="modal fade" id="modeloVeiculo" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Modelo/Veiculo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Cadastrar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Alterar</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    
                  
                  <form class=" mt-5 row g-3 " action="../acoes/cadModelo.act.php" method="post" enctype="multipart/form-data">

                <div class="modelo col-md-4">
                    <label for="funcao" class="form-label">Modelo</label>
                    <input type="text" class="form-control" name="modelo_veiculo" id="modelo">
                </div>
                <div class="col-12 ">
                    <button type="submit" class="btn-enviar">Cadastrar</button>
                </div>
                </form>



  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">.Alterar.</div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Salvar mudanças</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal cor-->
<div class="modal fade" id="modeloCor" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Cor do Veiculo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Cadastrar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Alterar</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">.Cadastrar.</div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">.Alterar.</div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Salvar mudanças</button>
      </div>
    </div>
  </div>
</div>



<!-- Escolher Proprietario-->
<div class="modal fade" id="proprietario" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Escolha o Proprietário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

    <div class="pesquisarProprietario">
        <p>Pesquisar <input type="text" onKeyup="pesquisarProprietario(this.value)"></p>
        <div id="result"></div>
    </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary" data-dismiss="modal" onclick="escolheMoradorVaga()" id="escolherMorador">Escolher Morador</button>
      </div>
    </div>
  </div>
</div>
<script>
  function escolheMoradorVaga(){
    const moradorvaga = document.getElementById("codmoradorvaga").value;
    document.getElementById('cod_morador').value = moradorvaga;w
}

</script>
</body>

</html>