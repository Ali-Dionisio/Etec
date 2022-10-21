<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <title>Intranet</title>
    <style>
    </style>
</head>
<body>
<button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
  <img src="imagens\icons8-menu-30.png" alt="">
</button>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Logo empresa</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
<div class="d-grid gap-3">
  <div class="p-2  mx-auto"><img src="..." class="rounded float-start" alt="..."></div>
  <div class="p-2 mx-auto"> Navegue entre os menus </div>
</div>
    </div>
<div class="d-grid gap-3">
  <div class="p-2  mx-auto"><button onclick="meuCadastro()" type="button" class="btn btn-dark" style="width: 220px;">Meu Cadastro</button></div>
  <div class="p-2 mx-auto">  <button type="button" class="btn btn-dark" style="width: 220px;">Minha Vaga</button></div>
  <div class="p-2  mx-auto"><button type="button" class="btn btn-dark" style="width: 220px;">Salão</button></div>
    <div class="p-2 mx-auto"> <button type="button" class="btn btn-dark" style="width: 220px;">Reclame aqui</button></div>
</div>

    <div class="dropdown mt-3 position-absolute bottom-10 start-10" >
      <button class="btn btn-secondary dropdown-toggle" style="width: 220px;" type="button" data-bs-toggle="dropdown">
        Opções
      </button>
      <img src="" alt="">
      <ul class="dropdown-menu" >
        <li><a class="dropdown-item" href="./index.php">Sair</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
    </div>

  </div>
</div>
</body>
<script src="./src/javascript.js"></script>
</html>