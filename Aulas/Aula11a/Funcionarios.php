<?php 
    require_once 'Pessoas.php';

    class Funcionarios extends Pessoas {
        private $setor;
        private $trabalhando;


        function mudarTrab(){
            $this->trabalhando = ! $this->trabalhando;
        }


        public function getSetor()
        {
                return $this->setor;
        }
        public function setSetor($setor)
        {
                $this->setor = $setor;
        }
        public function getTrabalhando()
        {
                return $this->trabalhando;
        }
        public function setTrabalhando($trabalhando)
        {
                $this->trabalhando = $trabalhando;
        }
    }

?>