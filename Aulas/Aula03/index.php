<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula03</title>
</head>
<body>
    <pre>
        <?php 
            require_once 'Caneta.php';

            $c1 = new Caneta("Bic cristal",0.7,"Vermelha",true);
            $c2 = new Caneta("Bic cristal",1.0,"Preta",false);
            print_r($c1);
            print_r($c2);
        ?>
    </pre>
</body>
</html>