<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><pre>
    <main>
    <?php 
    require_once 'Lutador.php';
    require_once 'Lutas.php';


    $lutadores = array();
    $lutador[0] = new Lutador("pretty Boy","França",31,1.75,68.9,11,2,1);
    $lutador[1] = new Lutador("Putscript","Brasil",29,1.68,57.8,14,2,3);
    $lutador[2] = new Lutador("Snapshadow","EUA",35,1.65,80.9,12,2,1);
    $lutador[3] = new Lutador("Dead Code","Autrália",28,1.93,81.6,13,0,2);
    $lutador[4] = new Lutador("UFOCobol","Brasil",37, 1.70, 119.3, 5, 4, 3);
    $lutador[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);

    $primeira = new Luta();
    $primeira->marcarLuta($lutador[5],$lutador[4]);
    $primeira->lutar();

    function setTeste($teste){
       print "<pre>". ( print_r($teste));
    }
?>
    </pre></main>
</body>
</html>