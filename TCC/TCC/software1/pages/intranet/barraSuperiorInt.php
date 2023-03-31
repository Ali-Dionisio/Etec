    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            background-repeat: no-repeat;
            background-size: 100vw 100vh;
            background-position: top;
            background-attachment: fixed;
        }

        p,
        h1,
        h2,
        a,
        input,
        li {
            font-family: 'Ubuntu', sans-serif;
        }

        #barra {
            display: flex;
            align-items: center;
            height: 4vw;
            background-color: #1484fc;
            position: -webkit-sticky;
            /* Safari */
            position: sticky;
            top: 0;
        }

        #barra .logo img {
            height: 50%;
            padding: 5px 0 5px 0;
            margin-left: 1vw;
            width: 10vw;
        }

        #barra li {
            display: inline-block !important;
            text-decoration: underline !important;
            text-underline-offset: 10px !important;
            color: white !important;
        }

        #barra ul {
            width: 40vw;
            display: flex;
            justify-content: space-between;
        }

        #barra a {
            color: white;
        }

        #barra .sair img {
            height: 20px;
            margin-right: 1vw;
        }

        .sair {
            position: absolute;
            right: 2vw;
            border: 1px solid white;
            border-radius: 5px;
            padding: 5px 45px;
        }

        .sair a {
            text-decoration-line: none;
            font-size: 16pt;
        }
    </style>

    <div id="barra">
        <a href="../intranet/intranet.php">
            <nav class="logo">
                <img src="../imagens/logoCondMind.png" alt="" srcset="">
            </nav>
        </a>
        <nav>
            <?php
            @session_start();
            if (isset($_SESSION['msg'])) {
                unset($_SESSION['msg']);
            }
            $login = $_SESSION['usuarioLogin'];
            require('../acoes/connect.php');
            $morador = mysqli_query($con, "SELECT * FROM `tb_morador` WHERE `cpf`=$login");
            while ($moradores = mysqli_fetch_array($morador)) {
                echo "<ul>";
                echo "  <li>";
                echo "    <a href =../intranet/meuCadastro.php?cpf=$moradores[cpf]>
            Meu Cadastro </a>";
                echo "  </li>";
                echo "  <li>";
                echo "    <a href =../intranet/moradores.php>
            Moradores </a>";
                echo "  </li>";
                echo "  <li>";
                echo "    <a href =../intranet/usuarios.php>
          Usuários </a>";
                echo "  </li>";
                echo "  <li>";
                echo "    <a href =../intranet/minhaVaga.php>
          Minha Vaga </a>";
                echo "  </li>";
                echo "  <li>";
                echo "    <a href =../intranet/salao.php>
          Salão </a>";
                echo "  </li>";
                echo "  <li>";
                echo "    <a href =../intranet/reclameAqui.php>
          Reclame aqui </a>";
                echo "  </li>";
                echo "</ul>";
                echo "</nav>";

                echo "<nav class=sair>";
                echo "<a href=../acoes/logoff.php class=botoes> <img src=../imagens/porta-de-saida.png>  Sair</a>";
                echo "</nav>";
            }
            ?>
        </nav>
    </div>