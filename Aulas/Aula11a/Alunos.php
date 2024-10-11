<?php 

require_once 'Pessoas.php';

    class Aluno extends Pessoas{
        private $matri;
        private $curso;

        
        function cancelarMatri(){
            $this->setMatri(false);
            print "<p>Matrícula Cancelada!</p>";
        }

        public function getMatri()
        {
                return $this->matri;
        }
        public function setMatri($matri)
        {
                $this->matri = $matri;
        }
        public function getCurso()
        {
                return $this->curso;
        }
        public function setCurso($curso)
        {
                $this->curso = $curso;
        }
    }
?>