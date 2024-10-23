<?php 

    require_once 'Classes/Mamiferos.php';

    class Cachorro extends Mamifero{
        
        
        function emitirSom()
        {
            print "<p>Latindo</p>";
        }

        function enterrarOsso(){
            print "<p>Osso Enterrado</p>";
        }

        function abanarRabo(){
            print "<p></p>";
        }
    }
?>