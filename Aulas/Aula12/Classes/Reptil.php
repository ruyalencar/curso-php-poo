<?php 

    require_once 'Animais.php';

    class Reptil extends Animal{
        private $corEscama ;

        function locomover()
        {
            print "<p>Rastejando</p>";
        }

        function alimentar()
        {
            print "<p>Comendo vegetais</p>";
        }

        function emitirSom()
        {
            print "<p>Som de Réptil</p>";
        }

        public function getCorEscama()
        {
                return $this->corEscama;
        }
        public function setCorEscama($corEscama)
        {
                $this->corEscama = $corEscama;
        }
    }
?>