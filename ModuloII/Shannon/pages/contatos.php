<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../css/contatos.css">
    <link rel="stylesheet" href="../css/inicio.css">


</head>
<body>   

<div class="inicio">
  <img src="../images/ShannonLogo.png" height="100px" >
        <h2 class="titulo"></h2>
        <?php include('burger.php') ?>
</div>

<div class="page-heading about-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          </div>
        </div>
      </div>
    </div>
    <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="conteudo">
              <h2>Nossa Localização no Mapa</h2>
            </div>
          </div>

          <div class="col-md-8">
            <div id="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.595923937565!2d-46.4409483499733!3d-23.54703156687202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce6427fe3f5b23%3A0x54b863d343c81f8f!2sEtec%20Itaquera!5e0!3m2!1spt-BR!2sbr!4v1667921704838!5m2!1spt-BR!2sbr"&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" width="100%" height="330px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
            </div>
          </div>
          <div class="col-md-4">
            <div class="left-content">
              <h4>Sobre nosso escritório</h4>
              <p>A nossa sede está localizada em X...<br><br>Entre em contato para realizar uma visita</p>
              <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
         
          </div>
        </div>
      </div>
    </div>
</div>
<div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Mande uma mensagem</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Nome Completo" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Assunto" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Sua Mensagem" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Enviar   </button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include('footer.php') ?>
<script src="../js/slideShow.js"></script>
</body>
</html>