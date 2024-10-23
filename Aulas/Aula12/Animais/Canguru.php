<?php 

    require_once 'Classes/Mamiferos.php';
    
    class Canguru extends Mamifero{
        

        function usarBolsa(){

        }

        function locomover()
        {
            print "<p>Pulando</p>";
        }
    }
?>