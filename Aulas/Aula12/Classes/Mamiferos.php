<?php 

    require_once 'Animais.php';

    class Mamifero extends Animal{
        private $corPelo ;


        function locomover(){
            print "<p>Correndo</p>";
        }

        function alimentar()
        {
            print "<p>Mamando</p>";
        }

        function emitirSom()
        {
            print "<p>Som de Mamifero</p>";
        }

        public function getCorPelo()
        {
                return $this->corPelo;
        }
        public function setCorPelo($corPelo)
        {
                $this->corPelo = $corPelo;
        }
    }
?>