<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <pre>
        <?php 
            require_once 'Interface.php';
            require_once '/var/www/html/curso-php-poo/Exercicios /Exe03/Classes/AcoesVideo.php';
            require_once 'Classes/Gafanhoto.php';
            require_once 'Classes/Visu.php';

            $v[0] = new Video("Aula 1 de POO");
            $v[1] = new Video("Aula 12 de PHP");
            $v[2] = new Video("Aula 15 de HTML 5");

            $p[0] = new Gafanhoto("Jubileu", 22, "M","Juba");
            $p[1] = new Gafanhoto("Creuza", 23, "F","Creu");

            $vis[0] = new Visualizacao($p[0], $v[2]);
            // $vis[1] = new Visualizacao($p[1], $v[0]);
            $vis[2] = new Visualizacao($p[0], $v[0]);

            $vis[0]->avaliar();
            // $vis[1]->avaliarPorc(85);
            $vis[2]->avaliarPorc(85);

            print_r($vis[0]);
            print_r($vis[2]);
            // print_r($vis[1]);

        ?>
        </pre>
    </main>
</body>
</html>