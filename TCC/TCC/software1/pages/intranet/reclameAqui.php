<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/shannon.css">

    <title>Reclame Aqui</title>
</head>

<style>
    


#formulario{
    margin: 0 auto;
    width: 640px;
    height: auto;
}

</style>
<body>

    <?php include('../intranet/barraSuperiorInt.php')?>

    <div id="formulario">
    <div class="fale_conosco"><!--COMEÇO DA SESSÃO fALE CONOSCO-->

<h2 id="titulo_fale">Fale conosco</h2>




<form action="../acoes/fale_conosco.act.php" method="post">
    <div class="forms">
        <nav class="nome">
            <label for="nome_completo">NOME COMPLETO</label>
            <input type="text" name="nome_completo" id="nome" placeholder="Digite seu nome">
            <input type="hidden" name="via" value="CondMind">
        </nav>

   
                <div class="clear"></div>
       <nav class="email">
            <label for="email">EMAIL</label>
            <input type="email" name="email" id="email" placeholder="Digite seu email">
       </nav>

       <nav class="telefone">
        <label for="celular">TELEFONE</label>
        <input type="number"  name="celular" id="telefone" placeholder="(00) 00000-0000">
       </nav>
       
       <nav class="assunto">
        <p>ASSUNTO</p>
       
        <select name="assunto" >
        <option >Selecione uma opção</option>
            <option >Dúvida</option>
            <option >Contrato</option>
            <option >Softwares</option>
           
        </select>
       </nav>

       <nav class="mensagem">
        <p>MENSAGEM</p>
        <textarea name="mensagem"  placeholder="Digite a sua mensagem" id="area_texto" ></textarea>
       </nav>

        <input type="submit" value="ENVIAR" id="btn_contato" onclick="clique()">
            <div class="enviado">
            <p id=mensagem></p>
            </div>
    </div>

    </form>

</div>

</div>
</div>

</body>

</html>