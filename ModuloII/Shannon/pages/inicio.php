<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../css/inicio.css">

</head>
<body>    
<div class="barraSuperior">
  <img src="../images/ShannonLogo.png" height="100px" >
        <h2 class="titulo"></h2>
        <?php include('burger.php') ?>
</div>

<div class="slide w3-content w3-display-container ">
  <div class="w3-display-container mySlides">
  <img src="../images/loginCondmind.jpg" style="width:100%">
  <a href="./produtos.php"><div class="w3-display-bottomcenter w3-large w3-container w3-padding-16 w3-blue">
    CondMind é um Sucesso
  </div></a>
</div>

  <div class="w3-display-container mySlides">
  <img src="../images/grupo.png" style="width:100%">
  <a href="./quemSomos.php"><div class="w3-display-bottomcenter w3-large w3-container w3-padding-16 w3-blue">
    "A equipe de Milhões"
  </div></a>
</div>

  <button class="left w3-button w3-blue w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-blue w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<div class="d-flex justify-content-center bd-highlight mb-3">
  <div class="texto">
    Atuamos desde 2022 prestando serviços de assessoria condominial com excelência e transparência.
    Além da vasta e tradicional experiência alcançada ao longo dos anos de atuação, a empresa conta com inovadoras propostas de soluções, gestão e aplicação de tecnologias, demonstrando know how de quem sempre pensa na frente e em prol de seus clientes.
Nossas premissas na prestação de serviços, se destacam por oferecer soluções completas e adaptáveis ao condomínio e seus condôminos. Nossa equipe técnica é altamente qualificada e composta por profissionais capacitados, dedicados a entender e gerenciar as necessidades de nossos clientes, com responsabilidade e ética.
Consulte-nos e conheça a empresa que vai mudar o rumo de seu condomínio, tornando-o o melhor ambiente para se viver. <br>
<a href="./sobre.php">Mais informações</a>

<div class="video">
  <iframe width="100%" height="615" src="https://www.youtube.com/embed/N6h4FIr3-Sk?start=1" 
    title="YouTube video player" frameborder="0" 
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
    allowfullscreen></iframe>
</div>
  </div>

</div>

<?php include('footer.php') ?>
<script src="../js/slideShow.js"></script>
</body>
</html>