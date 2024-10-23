<?php 

    require_once 'Animais.php';

    class Peixe extends Animal{
        private $corEscama ;

        function locomover()
        {
            print "<p>Nadando</p>";
        }

        function alimentar()
        {
            print "<p>Comendo substancias</p>";
        }

        function emitirSom()
        {
            print "<p>Peixe não faz som</p>";
        }

        function soltarBolha(){
            print "<p>Soltou uma bolha</p>";
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