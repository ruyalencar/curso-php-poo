<?php 
    require_once 'Pessoas.php';

    class Professor extends Pessoas{
        private $especialidade;
        private $salario;


        function receberAum($a){
            $this->setSalario($a);
        }
       
        public function getEspecialidade()
        {
                return $this->especialidade;
        }
        public function setEspecialidade($especialidade)
        {
                $this->especialidade = $especialidade;
        }
        public function getSalario()
        {
                return $this->salario;
        }
        public function setSalario($salario)
        {
                $this->salario = $salario;
        }
    }
?>