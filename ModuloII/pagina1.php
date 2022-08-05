<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .titulo{
            background-color:red;
        }
        .importante{
            color:yellow;
        }
    </style>
</head>
<body>
    
    <div class="central"></div>
    <?php
    echo "<h1 class=\"titulo importante\">Primeira aula</h1>";
        $x = "manhã";
        $y = 5;
        $soma = $x * $y;
        echo "A soma é $soma";
    $x = "10";
    if($x == 10){
        echo "True";
    }
    if($x === 10){ //exatamente igual
        echo "True";
    }
    if(!$x == 10){ //não é
        echo "True";
    }else{
        echo "False";
    }
    for($x=0;$x<5;$x++){
        echo "<p>Valor de x = $x.</p>";
    }
    $y = 0;
    $x = 0;
    do{
        echo "<p>O valor de y é $x</p>";
        $x++;
    }while($x>10);

    echo "<p>Linha 48: O valor de y é $x</p>";

    echo rand(0,60);
        //var_dump($idade);
        // echo "<h1 class=\"titulo importante\">A idade é $idade</h1>";
    ?>
    
</body>
</html>