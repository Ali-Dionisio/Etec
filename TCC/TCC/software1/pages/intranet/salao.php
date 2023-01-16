<?php require('sec.php') ?>

<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/salao.css">
    <title>Salão</title>
</head>
<body>
<?php include('sidebar.php'); ?>    
    <h1 id="titulo" >Agende o seu horário</h1>
    <h4 id="titulo2" >Em nosso salão de festas você pode curtir todas as atrações </h4>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../imgs/mesas" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Mesas</h5>
        <p>Divididas em boa disposição para melhor interatividade entre os convidados.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../imgs/jogos" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Jogos</h5>
        <p>O melhor para que você e seus convidados possam se sentir em casa.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../imgs/cozinha" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Cozinha</h5>
        <p>Existem festa sem comes e bebes? Aqui você prepara tudo.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="disposicaoDate">
    <h1>Marque abaixo a data e o horario de inicio e termino do seu evento</h1>
    Data do evento: <input type="date" name="Calendario" id="calendario">
    Horário de Inicio<input type="time" name="Calendario" id="calendario">
    Horário de Termino<input type="time" name="Calendario" id="calendario">

</div>
</body>
</html>