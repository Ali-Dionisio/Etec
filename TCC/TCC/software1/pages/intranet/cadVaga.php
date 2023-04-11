<?php require('sec.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CondMind</title>
        <script src="../src/javascript.js"></script>

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
                    <h5 class="card-title">Cadastrar Vaga</h5>
                </div>
            </div>
            <div class="cadastro col mt-3">
                <!--Segunda coluna -->

                <form class=" mt-5 row g-3 " action="../acoes/cadVaga.act.php" method="post" enctype="multipart/form-data">

                    <div class="col-md-4">
                        <label for="cod_morador" class="form-label">Código Proprietário</label>
                        <input type="number" name="cod_morador" class="form-control" id="codigomorador">
                    </div>
                    <hr>
                    <div class="col-md-4">
                        <label for="numerovaga" class="form-label">Número da Vaga</label>
                        <select type="text" id="numerovaga" name="num_vaga" class="form-select2">
                            <option value="">Selecione um número</option>
                            <?php
                            for ($i = 1; $i <= 100; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>>
                        </select>
                    </div>
                    <hr>
                    <div class="col-md-4">
                        <label for="tipovaga" class="form-label">Tipo de Vaga</label>
                        <select type="text" id="tipovaga" name="tipo_vaga" class="form-select2">
                            <option value="">Selecione o tipo de veículo</option>
                            <option>Carro</option>
                            <option>Moto</option>
                        </select>
                    </div>
                    <hr>
                    <div class="col-md-4">
                        <label for="placaveiculo" class="form-label">Placa do Veículo</label>
                        <input type="number" name="placa_veiculo" class="form-control" id="placaveiculo">
                    </div>
                    <hr>
                    <div class="col-md-4">
                        <label for="codigousuario " class="form-label">Código do Usuário</label>
                        <input type="number" name="cod_usuario" class="form-control" id="codigousuario">
                        </div>
                    <hr>
                    <div class="col-12 ">
                        <button type="submit" class="btn-enviar">Cadastrar</button>
                </form>
            </div>
            <button onclick="voltarVaga()" class="btn-cancel">Cancelar</button>
        </div>
    </div>
    </div>

</body>

</html>