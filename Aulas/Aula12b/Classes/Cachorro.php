<?php 

    require_once '/var/www/html/curso-php-poo/Aulas/Aula12b/Classes/Lobo.php';

    class Cachorro extends Lobo{
        function emitirSom()
        {
            print "<p>AU!AU!AU!</p>";
        }


        function reagirFrase($f) {
            if(($f == "toma comida") || ($f == "Olá")) {
                print "<p>Abanar e Latir</p>";
            } else {
                print "<p>Rosnar</p>";
            }
        }
        function reagirDataHora($dh, $mn){
            if ($dh < 12){
                print "<p>Abanar</p>";
            }else if($dh >= 18){
                print "<p>Ignorar</p>";
            }else {
                print "<p>Abanar e Latir</p>";
            }
        }
        function reagirDono($d){
            if($d){
                print "<p>Abanar</p>";
            }else {
                print "<p>Rosnar e Latir</p>";
            }
        }
        function reagirIdadePeso($i, $p){
            if ($i < 5){
                if ($p < 10){
                    print "<p>Abanar</p>";
                }else {
                    print "<p>Latir</p>";
                }
            }else{
                if($p < 10){
                    print "<p>Rosnar</p>";
                }else {
                    print "Ignorar";
                }
            }
        }
    }

?>