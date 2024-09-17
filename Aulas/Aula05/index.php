<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle</title>
</head>
<body>
    <h1>Controle Remoto</h1>
    <pre>
    <?php 
    require_once 'Controle.php';
    $c1 = new ControleRemoto;
    $c1->menosVolume();
    $c1->maisVolume();
    $c1->maisVolume();
    $c1->maisVolume();
    $c1->play();
    $c1->abrirMenu();
    ?>
    </pre>
</body>
</html>