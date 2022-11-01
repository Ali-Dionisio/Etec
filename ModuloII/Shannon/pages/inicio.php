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
        <h2 class="titulo">Shannon</h2>
        <?php include('burger.php') ?>
</div>

<div class="slide w3-content w3-display-container ">
  <div class="w3-display-container mySlides">
  <img src="../images/imge2.jpg" style="width:100%">
  <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-blue">
    CondMind é um Sucesso
  </div>
</div>

  <div class="w3-display-container mySlides">
  <img src="../images/imge3.jpg" style="width:100%">
  <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-blue">
    "A equipe de Milhões"
  </div>
</div>

  <button class="left w3-button w3-blue w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-blue w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>



<script src="../js/slideShow.js"></script>
</body>
</html>