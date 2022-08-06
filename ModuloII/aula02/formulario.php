<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        .formulario{
            color: blue;
            position: absolute;
            top: 60px;
            right: 40%;
            padding: 15px;
        }
    </style>
</head>
<body>
       <form action="formulario.act.php" method="post" class="formulario">
            <h1>Realize calculos</h1>
            <p>Base</p>
            <input type="number" name="base">
            <p>Altura</p>
            <input type="number" name="altura">
            <p><input type="submit" value="enviar"></p>
       </form>
       
</body>
</html>