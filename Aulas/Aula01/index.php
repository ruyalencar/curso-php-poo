<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula1</title>
</head>
<body>
    <?php 
    require_once 'Caneta.php';
    $c1 = new Caneta;
    $c1 ->cor = "azul";
    $c1 ->ponta = 0.5;
    $c1 ->tampada = false;
    $c1 ->destampar();

    $c1 ->rabiscar();
    // var_dump($c1);
    ?>
</body>
</html> 