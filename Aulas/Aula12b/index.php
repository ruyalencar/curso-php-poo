<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12b</title>
</head>
<body>
    <main>
        <?php 
        
            require_once 'Classes/Mamifero.php';
            require_once 'Classes/Animais.php';
            require_once 'Classes/Lobo.php';
            require_once 'Classes/Cachorro.php';


            $c = new Cachorro();
            $c->reagirFrase("Olá");
            $c->reagirFrase("Vai apanhar!");
            $c->reagirDataHora(11,45);
            $c->reagirDataHora(21,00);
            $c->reagirDono(true);
            $c->reagirDono(false);
            $c->reagirIdadePeso(2, 12.5);
            $c->reagirIdadePeso(17, 4.5);
        ?>
    </main>
</body>
</html>