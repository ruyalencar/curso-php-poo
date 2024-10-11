<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula herança</title>
</head>
<body>
    <main>
        <?php 
        
            require_once 'Classes/Pessoa.php';
            require_once 'Classes/Visitante.php';
            require_once 'Classes/Aluno.php';
            require_once 'Classes/Professor.php';
            require_once 'Classes/Bolsista.php';
            require_once 'Classes/Tecnico.php';
        


            
            $v1 = new Visitante("Nicolle", 22, "F");
            
            $a1 = new Aluno("Neto", 23, "M");
            $a1->setMatricula(1111);
            $a1->setCurso("Desesnvolvedor");
            $a1->pagarMensalidade();

            $b1 = new Bolsista("LULU", 13, "F");
            $b1->setMatricula(1112) ;
            $b1->setBolsa(12.5) ;
            $b1->setCurso("Administração");
            $b1->pagarMensalidade();

            $p1 = new Professor("Roberto", 34, "M");
            $p1->setEspecialidade("Matematica") ;
            $p1->setSalario(3000) ;
            $p1->receberAumento(1500) ;

            $t1 = new Tecnico("Arnaldo", "35", "M");
            $t1->setMatricula(1113);
            $t1->setCurso("TI,Informtica");
            $t1->setRegisProfi(6969);
            $t1->praticar();




            teste($v1);
            teste($a1);
            teste($b1);
            teste($p1);
            teste($t1); 



            function teste($t){
                print "<pre>";
                print"<hr>";
                print_r($t);
            }
        
        ?>
    </main>
</body>
</html>