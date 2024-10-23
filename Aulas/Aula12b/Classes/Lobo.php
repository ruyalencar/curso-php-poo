<?php 

    require_once '/var/www/html/curso-php-poo/Aulas/Aula12b/Classes/Mamifero.php';

    class Lobo extends Mamifero{
        
        function emitirSom()
        {
            print "<p>AUUUUUUUUUUUUUU</p>";
        }
    }

?>