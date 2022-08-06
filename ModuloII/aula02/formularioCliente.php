<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
    <script src="src/jquery-3.6.0.min.js"></script>
    <script src="src/jQuery-Mask-Plugin-master/src/jquery.mask.js"></script>
    <link rel="stylesheet" href="style/styleIntranet.css">
</head>
<body>

    <nav class="barramenu">
        <div class="logo" class="nav-links">
            <img src="Imgs/LogoG&C.png" alt="Logo">       
        </div>
        <div class="barralateral">
            <ul>
                <li class="titulo">Produtos</li>
                <li class="subtitulo"><a href="../CiboGiola/cadProd.html">Cadastrar Produtos</a></li>
                <li class="subtitulo"><a href="../CiboGiola/cadFunc.html">Cadastrar Funcionários</a></li>
           
                <li><button type="button" class="btnsair" onclick="sair()">Sair</button></li>
            </ul>
        </div>
    </nav>
    <form class="formulario"  action="formulario.cli.php" method="post">
        <h3>Preencha o formulário do Funcionário</h3>
        <p>
            <label for="txtNome" >Nome completo:</label>
            <input type="text" name="txtNome" id="txtNome" placeholder="Digite o seu nome completo">
        </p>
        <p>
            <label for="txtCpf" >CPF:</label>
            <input type="text" name="txtCpf" id="txtCpf" class="txtCpf">
        </p>
        <p>
            <label for="sexo" >Sexo:</label>
            <input type="radio" name="sexo" id="radioMasc" value="m">
            <label for="radioMasc">Masculino</label>
        
            <input type="radio" name="sexo" id="radioFem" value="f">
            <label for="radioFem">Feminino</label>
        </p>
        <p>
            <label for="nascto" >Data de Nascimento:</label>
            <select name="nascto" id="selectNascto">
            <option value="false"></option>
                <script>
                    for(ano=1900;ano<=2022;ano++){
                        document.write("<option value="+ano+">"+ano+"</option>");
                    } 
                </script>
            </select>
            <select name="nascto" id="selectNascto">
                <option value="false"></option>
                    <script>
                        for(mes=1;mes<=12;mes++){
                            document.write("<option value="+mes+">"+mes+"</option>");
                        }
                    </script>
                </select>
                <select name="nascto" id="selectNascto">
                    <option value="false"></option>
                        <script>
                            for(dia=1;dia<=31;dia++){
                                document.write("<option value="+dia+">"+dia+"</option>");
                            }
                        </script>
                    </select>
        </p>
        <p>
            <label for="txtEndereco" >Endereço:</label>
            <input type="text" name="txtEndereco" id="txtEndereco" placeholder="Digite o seu endereço">
            <input type="text" name="txtNum" id="txtNum" placeholder="Digite o número">
        </p>
        <p>
            CEP:
            <input type="number" name="txtCep" id="txtCep" class="txtCep">
        </p>
        <p>
            <label for="txtCelular">Celular:</label>
            <input type="text" name="txtCelular" id="" class="txtCelular" placeholder="(00)00000-0000">
        </p>
        <p>
            <label for="txtTelefone">Telefone:</label>
            <input type="text" name="txtTelefone" id="" class="txtTelefone" placeholder="(00)00000-0000">
        </p>
        <p>
            
        </p>
        <p>
            <label for="txtEmail">E-mail:</label>
            <input type="email" name="txtEmail" id="" placeholder="exemplos@exemplo.com.br" class="txtEmail">
        </p>
        <p>
            Cargo pretendido:
        </p>
        <p>
            <input type="checkbox" name="cargo[]" id="radioAdm" value="adm">
            <label for="radioAdm">Administração</label>
        </p>
        <p>
            <input type="checkbox" name="cargo[]" id="radioTi" value="ti">
            <label for="radioTi">Informática</label>
        </p>
        <p>
            <input type="checkbox" name="cargo[]" id="radioContab" value="contab">
            <label for="radioContab">Contabílidade</label>
        </p>
        <p>
            Salário pretendido:
        </p>
        <p>
            <input type="checkbox" name="salario[]" id="radioBaixo" value="baixo">
            <label for="radioBaixo">R$ 1200 - R$ 1800</label>
        </p>
        <p>
            <input type="checkbox" name="salario[]" id="radioMedio" value="medio">
            <label for="radioMedio">R$ 1801 - R$ 2100</label>
        </p>
        <p>
            <input type="checkbox" name="salario[]" id="radioAlto" value="alto">
            <label for="radioAlto">R$ 2101 - R$ 3000</label>
        </p>

        <p>
            <label for="txtSobre">Fale sobre você</label>
        </p>
            <p>
            <textarea name="txtSobre" id="" cols="30" rows="10"></textarea>
        </p>
        <button>Enviar</button>
    </form>
    <script>
         $('.txtTelefone').mask('(00)00000-0000');
        $('.txtCep').mask('00000000');
        $('.txtCpf').mask('000.000.000-00');
        $('.txtCelular').mask('(00)00000-0000');
    </script>
    <script src="src/pages.js"></script>
</body>
</html>