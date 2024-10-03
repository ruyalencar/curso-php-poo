<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio livros</title>
</head>
<body>
    <main>
        <pre>
        <?php 
        require_once 'livros.php';
        require_once 'publica.php';
        require_once 'pessoa.php';


        $p[0] = new Pessoa("Neto",23,"M");
        $p[1] = new Pessoa("Luisa",12,"F");

        $l[0] = new Livro("PHP Básico","jose da silva",300, $p[0]);
        $l[1] = new Livro("PHP POO", "Ana Paula", 500,  $p[0]);
        $l[2] = new Livro("PHP Avançado", "Maria da souza", 800, $p[1]);


        $l[1]->abrir();
        $l[1]->folhear(90);
        $l[1]->avançarPag();
        $l[1]->avançarPag();
        $l[1]->voltarPag();
        $l[1]->detalhes();
        $l[2]->detalhes();
        $l[0]->detalhes();

        ?>
    </main>
</body>
</html> 