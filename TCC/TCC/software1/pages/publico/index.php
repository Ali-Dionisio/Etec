<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shannon</title>
    <link rel="stylesheet" href="../estilo/shannon.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>


    <div class="nav_bar">
        <img id="logo" src="../imagens/ShannonLogo.png" alt="">
        <div class="links">

            <a href="#home">Home</a>
            <a href="#titulo_sobre">Sobre a Shannon</a>
            <a href="login.php">CondMind</a>
            <a href="#titulo_fale">Fale conosco</a>
        </div><!--FIM DA DIV LINKS-->
    </div><!--FIM DA DIV NAV_BAR-->
    <br>
    <hr>


    <div id="page_body">
            <h1>Slogan</h1>
                <div class="imagens">
                   <!-- <img id="img_slider" src="../imagens/img_teste_Shannon.jpg" alt="" id="slider">  -->
                   <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../imagens/img_teste_Shannon.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../imagens/img_teste_Shannon.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../imagens/img_teste_Shannon.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
 
                </div>
            <h2 id="titulo_sobre">Sobre a Shannon</h2>
            <img id="img_sobre_nos" src="../imagens/grupo.png" alt="">
            <h3 id="sobre">Quem somos e o que fazemos?</h3>
            <p>Atuamos desde 2022 prestando serviços de assessoria condominial com excelência e transparência. Além da vasta e tradicional experiência alcançada ao longo dos anos de atuação, a empresa conta com inovadoras propostas de soluções, gestão e aplicação de tecnologias, demonstrando know how de quem sempre pensa na frente e em prol de seus clientes.</p>
       
            <p>Nossas premissas na prestação de serviços, se destacam por oferecer soluções completas e adaptáveis ao condomínio e seus condôminos. Nossa equipe técnica é altamente qualificada e composta por profissionais capacitados, dedicados a entender e gerenciar as necessidades de nossos clientes, com responsabilidade e ética.</p>


        <div class="clear"></div>

        <br>
        <!--INICIO PARTE CONDMIND-->
        <h2 id="titulo_cond">Condmind</h2>
        <div class="condmind_texto">
            <h3>CONDMIND</h3>
            
            <h4>GESTÃO DE ESTACIONAMENTO</h4>
            <br><br>

            <p>
                Problemas com organização das vagas de garagem/estacionamento são recorrentes em apartamentos ou condomínios. Seja a falta de informações sobre a vaga e seu dono, a não opção de alteração da mesma sendo possível apenas por sorteio em alguns casos ou até mesmo a opção de poder excluir ou alugar o espaço.
            </p>
            
            <p>
                Feito para auxiliar esta organização em estacionamentos de condomínios, o CondMind realiza consultas, alteração e exclusão das vagas ofertadas facilitando a organização tanto para a administração quanto para os moradores.

            </p>
          
            <p>
                Desenvolvido para navegadores, faz você se manter atualizado em tempo real sobre a condição de sua vaga. Fornece a opção de alterar proprietário caso o usuário não deseje ter sua vaga, entre outras funcionalidades.
            </p>
            <br>

            <div class="saber_mais"><a class="saber_mais" href="login.php">CLIQUE AQUI PARA SABER MAIS</a></div>
        </div>

        <div class="condmind_imagem">

            <img id="condmind_img" src="../imagens/CondMind.png" alt="">
        </div>

        <div class="clear"></div>
        <!--FINAL DA PÁGINA BODY-->
    <br>
        <div class="fale_conosco"><!--COMEÇO DA SESSÃO fALE CONOSCO-->

            <h2 id="titulo_fale">Fale conosco</h2>
                <div class="forms">
                   <nav class="nome">
                        <p>NOME</p>
                        <input type="text" name="" id="nome" placeholder="Digite seu nome">
                   </nav>

                   <nav class="ultimo_nome">
                        <p>ÚLTIMO NOME</p>
                        <input type="text"  name="" id="sobrenome" placeholder="Digite o seu último nome">
                   </nav>
                            <div class="clear"></div>
                   <nav class="email">
                        <p>E-MAIL</p>
                        <input type="email" name="" id="email" placeholder="Digite seu email">
                   </nav>

                   <nav class="telefone">
                    <p>TELEFONE</p>
                    <input type="number"  name="" id="telefone" placeholder="(00) 00000-0000">
                   </nav>
                   
                   <nav class="assunto">
                    <p>ASSUNTO</p>
                   
                    <select name="" id="">
                    <option value="">Selecione uma opção</option>
                        <option value="">Dúvida</option>
                        <option value="">Contrato</option>
                        <option value="">Softwares</option>
                       
                    </select>
                   </nav>

                   <nav class="mensagem">
                    <p>MENSAGEM</p>
                    <textarea name=""  placeholder="Digite a sua mensagem" id="area_texto" ></textarea>
                   </nav>

                    <input type="submit" value="ENVIAR" id="btn_contato" onclick="clique()">
                        <div class="enviado">
                        <p id=mensagem></p>
                        </div>
                </div>


        </div>

    </div>
        <div class="clear"></div>
    <div class="footer">
        <img src="../imagens/ShannonLogo.png" alt="" id="footer_img">
        <p class="rua_matriz"> Matriz: Rua Virgínia Ferni, 400 - Itaquera, São Paulo - SP. | CEP: 0825-3000 | Fones: (11) 2254-7627 </p>
        <p  id="copy">Copyright &copy;  2023. Condmind</p>
        <div id="icon_footer">
           <a class="link_footer" href="https://www.instagram.com"><img class="img_f" src="../imgs/instagram.png" alt="Imagem Instagram"></a> 
            <a class="link_footer" href="https://www.linkedin.com/"><img class="img_f" src="../imgs/linkedin.png" alt="Imagem Linkedln"></a>
            <a class="link_footer" href="https://www.facebook.com"><img class="img_f" src="../imgs/facebook.png" alt="Imagem Facebook"></a>
        </div>
    </div>


    <script>
        function clique(){
                if(document.getElementById("nome").value=="" || document.getElementById("sobrenome").value=="" || document.getElementById("telefone").value=="" 
                || document.getElementById("area_texto").value=="" || document.getElementById("email").value=="" ){
                        document.getElementById("mensagem").innerHTML = "Preencha todos os campos!"
                    }else{
                        document.getElementById("mensagem").innerHTML = "Mensagem enviada!"
                        }
                    }
    </script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>