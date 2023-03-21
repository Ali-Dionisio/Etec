<!doctype html>
<html lang="en">
    <head>

    <title>MotorSport</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
        <link href="/lojamotorsport/img/favicon.ico" rel="icon">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

        <link href="/lojamotorsport/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="/lojamotorsport/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">

        <link href="/lojamotorsport/css/bootstrap.min.css" rel="stylesheet">

        <link href="/lojamotorsport/css/style.css" rel="stylesheet">

    </head>
    <body>
<!-- Topbar -->
<div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body pr-3" href=""><i class="fa fa-phone-alt mr-2"></i>+55 11 95966-6516</a>
                    <span class="text-body">|</span>
                    <a class="text-body px-3" href=""><i class="fa fa-envelope mr-2"></i>motorsport@suporte.com</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body px-3" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                  
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar -->


    <!-- Navbar -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-uppercase text-primary mb-1">MotorSport</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a class="nav-link active" href="?page=index">Home</a>
                        <a class="nav-link" href="?page=sobre">Sobre Nós</a>
                        <a class="nav-link" href="?page=financiamento">Financiamento</a>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Comprar
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="?page=carroUsaSemi">Carros usados ou seminovos</a></li>
                                    <li><a class="dropdown-item" href="?page=carroNovo">Carros novos</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Vender
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="?page=venderMeu">Vender meu veículo</a></li>
                                    <li><a class="dropdown-item" href="?page=meuAnuncio">Meus anúncios</a></li>
                                </ul>
                            </li>
                          
                        <a class="nav-link" href="?page=cadastro">Cadastro</a>

                        <a class="nav-link" href="?page=login">Login</a>

                        <a class="nav-link" href="?page=listarUsuario">Listar Usuários</a>

                    </div>
                </div>
            </nav>
        </div>
    </div>
<!-- Navbar -->
 <!-- Container -->
        <div class = "container">
            <div class = "row">
                <div class = "col mt-5">
                    <?php
                        include("connect.php");
                        switch(@$_REQUEST["page"]){
                            case"carroUsaSemi":
                                include("carrosUsadosSeminovos.php");
                                break;
                            case "carroNovo":
                                include("carrosNovos.php");
                                break;
                            case"venderMeu":
                                include("venderMeuCarro.php");
                                break;   
                            case"meuAnuncio":
                                include("meuAnuncio.php");
                                break;
                            case"finaciamento":
                                include("financiamento.php");
                                break;
                            case"sobre":
                                include("sobre.php");
                                break;
                            case"cadastro":
                                include("cadUsuario.php");
                                break;
                            case"login":
                                include("login.php");
                                break;
                            case"perfil":
                                include("perfilUsuario.php");
                                break;
                            case"salvar":
                                include("salvarUsuario.php");
                                break;
                            case"editar":
                                include("editarUsuario.php");
                                break;
                            case"listarUsuario":
                                include("listarUsuario.php");
                                break;
                            
                        }
                    ?>
                </div>
            </div>
        </div>
<!-- Carousel -->
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>