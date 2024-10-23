<?php 

    require_once 'Animais.php';

    class Ave extends Animal{
        private $corPena ;

        function locomover()
        {
            print "<p>Voando</p>";
        }

        function alimentar()
        {
            print "<p>Comendo frutas</p>";
        }

        function emitirSom()
        {
            print "<p>Sem de ave</p>";
        }

        function fazerNinho(){
            print "<p>Construiu um ninho</p>";
        }

        public function getCorEscama()
        {
                return $this->corPena;
        }
        public function setCorEscama($corPena)
        {
                $this->corPena = $corPena;
        }
    }
?>