<?php 

    require_once 'Pessoa.php';

    class Professor extends Pessoa{
        private $especialidade;
        private $salario ;


        function receberAumento($a){
            $this->setSalario($this->getSalario() + $a);
        }

        
        function getEspecialidade() {
                return $this->especialidade;
            }
            function setEspecialidade($e) {
                $this->especialidade = $e;
            }
        function getSalario()
        {
                return $this->salario;
        }
        function setSalario($salario)
        {
                $this->salario = $salario;
        }
    }
?>