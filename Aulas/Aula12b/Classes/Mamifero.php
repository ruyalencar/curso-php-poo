<?php 

    require_once '/var/www/html/curso-php-poo/Aulas/Aula12b/Classes/Animais.php';

    class Mamifero extends Animal{
        protected $corpelo ;

        function emitirSom(){
            print "<p>Som de Mamifero</p>";
        }

        public function getCorpelo()
        {
                return $this->corpelo;
        }
        public function setCorpelo($corpelo)
        {
                $this->corpelo = $corpelo;
        }
    }

?>