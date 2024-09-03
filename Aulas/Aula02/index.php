<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula1</title>
</head>
<body>
    <pre>
    <?php 
    require_once 'Caneta.php';
    $c1 = new Caneta;
    $c1->modelo = "BIC cristal";
    $c1->cor = "Azul";
    // $c1->ponta = 0.5 ;
    // $c1->carga = 99;
    $c1->destampar();
    print_r($c1);
    $c1->rabiscar();
    ?>
    </pre>
</body>
</html> 