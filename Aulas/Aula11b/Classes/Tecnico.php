<?php 
 
    require_once 'Aluno.php';

    class Tecnico extends Aluno {
        private $regisProfi ;


        public function praticar(){
            print "<p>" . $this->getNome() . " trabalhou durante 1 mês no estagio </p>";
        }


        public function getRegisProfi()
        {
                return $this->regisProfi;
        }
        public function setRegisProfi($regisProfi)
        {
                $this->regisProfi = $regisProfi;
        }
    }




?>