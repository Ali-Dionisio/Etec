<?php require('sec.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CondMind</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script> -->
    <!-- <script src="src/jquery-3.6.0.min.js"></script>
        <script src="src/jQuery-Mask-Plugin-master/src/jquery.mask.js"></script> -->
    <script src="../jquery/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="../estilo/minhaVaga.css">
</head>

<body>
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
                    <h5 class="card-title">Cadastrar Veículo</h5>
                </div>
            </div>
            <div class="cadastro col mt-3">
                <!--Segunda coluna -->

                <form class=" mt-5 row g-3 " action="../acoes/cadVeiculo.act.php" method="post" enctype="multipart/form-data">

                    <div class="col-md-4">
                        <label for="codigomorador" class="form-label">Código Proprietário</label>
                        <input type="number" name="cod_morador" class="form-control" id="codigomorador">
                    </div>
                    <hr>
                    <div class="col-md-4">
                        <label for="placaveiculo" class="form-label">Placa do Veículo</label>
                        <input type="text" name="placa_veiculo" class="form-control" id="placaveiculo">
                    </div>
                    <hr>
                    <div class="col-md-4">
                        <label for="modeloveiculo" class="form-label">Tipo do Veículo</label>
                        <select type="text" id="modeloveiculo" name="modelo" class="form-select2">
                            <option value="">Selecione o tipo de veículo</option>
                            <option>Carro</option>
                            <option>Moto</option>
                        </select>
                    </div>
                    <hr>
                    <div class="col-md-4">
                        <label for="modeloveiculo" class="form-label">Cor do Veículo</label>
                        <select type="text" id="modeloveiculo" name="modelo" class="form-select2">
                            <option value="">Selecione uma cor</option>
                            <option value="#000000">Preto</option>
                            <option value="#FFFFFF">Branco</option>
                            <option value="#FF0000">Vermelho</option>
                            <option value="#00FF00">Verde</option>
                            <option value="#0000FF">Azul</option>
                            <option value="#FFFF00">Amarelo</option>
                            <option value="#FFC0CB">Rosa</option>
                            <option value="#800080">Roxo</option>
                            <option value="#FFA500">Laranja</option>
                            <option value="#008000">Verde escuro</option>
                            <option value="#800000">Marrom</option>
                        </select>
                    </div>
                    <hr>
                    <div class="col-md-4">
                        <label for="modeloveiculo" class="form-label">Modelo do Veículo</label>
                        <select type="text" id="modeloveiculo" name="modelo" class="form-select2">
                            <option value="">Selecione um carro</option>
                            <option value="Chevrolet Onix">Chevrolet Onix</option>
                            <option value="Fiat Strada">Fiat Strada</option>
                            <option value="Volkswagen Gol">Volkswagen Gol</option>
                            <option value="Hyundai HB20">Hyundai HB20</option>
                            <option value="Fiat Argo">Fiat Argo</option>
                            <option value="Jeep Renegade">Jeep Renegade</option>
                            <option value="Chevrolet Tracker">Chevrolet Tracker</option>
                            <option value="Toyota Corolla">Toyota Corolla</option>
                            <option value="Fiat Toro">Fiat Toro</option>
                            <option value="Volkswagen Polo">Volkswagen Polo</option>
                            <option value="Toyota Hilux">Toyota Hilux</option>
                            <option value="Jeep Compass">Jeep Compass</option>
                        </select>
                    </div>
                    <hr>
                    <div class="col-md-4">
                        <label for="modeloveiculo" class="form-label">Ano do Veículo</label>
                        <select type="text" id="modeloveiculo" name="modelo" class="form-select2">
                            <option value="">Selecione um ano</option>
                            <?php
                            for ($i = 2023; $i >= 1950; $i--) {
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <hr>
                    <div class="col-12 ">
                        <button type="submit" class="btn-enviar">Cadastrar</button>
                </form>
            </div>
            <button onclick="cancelarMorador()" class="btn-cancel">Cancelar</button>
        </div>
    </div>
    </div>

</body>

</html>