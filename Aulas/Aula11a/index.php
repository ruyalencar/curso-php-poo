<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <?php 
            require_once 'Pessoas.php';
            require_once 'Alunos.php';
            require_once 'Professores.php';
            require_once 'Funcionarios.php';

            $p1 = new Pessoas("Neto", 23 , "M");

            $p2 = new Aluno("Maria", 40, "F",);

            $p3 = new Professor("Claudio" , 35 , "M");

            $p4 = new Funcionarios("Fabiana" , 26 , "F");


            $p2->setCurso("informatica");

            $p3->setSalario(2500.75);

            $p4->setSetor("Estoque");

            $p3->receberAum(550.20);

            $p4->mudarTrab();

            $p2->cancelarMatri();


            
            print "<pre>";
            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);
            ?>
    </main>
</body>
</html>