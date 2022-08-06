<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // $base = $_POST['base'];
        // $altura = $_POST['altura'];
        // echo $base + $altura

        extract($_POST);
        var_dump($_POST);
        echo "<p>A Base é: $base </p>";
        echo "<p>A Altura é: $altura </p>";
    ?>
</body>
</html>