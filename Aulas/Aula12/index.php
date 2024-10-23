<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12</title>
</head>
<body>
    <main>
        <?php 
        
            require_once 'Classes/Animais.php';
            require_once 'Classes/Mamiferos.php';
            require_once 'Classes/Reptil.php';
            require_once 'Classes/Peixes.php';
            require_once 'Classes/Aves.php';
            require_once 'Animais/Canguru.php';
            require_once 'Animais/Cachorro.php';
            require_once 'Animais/Cobra.php';
            require_once 'Animais/Tartaruga.php';
            require_once 'Animais/Goldfish.php';
            require_once 'Animais/Arara.php';

            $m = new Mamifero();
            $a = new Ave();
            $r = new Reptil();

            $c = new Canguru();
            $k = new Cachorro();
            $t = new Tartaruga();

            $m->locomover();
            $c->locomover();
            $k->locomover();
            $t->locomover();

            $m->emitirSom();
            $a->emitirSom();
            $k->emitirSom();


            print "<pre>";
            var_dump($k);

        ?>
    </main>
</body>
</html>