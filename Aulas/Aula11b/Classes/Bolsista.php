<?php 

    require_once 'Aluno.php';

    class Bolsista extends Aluno{
        private $bolsa ;
        

        function renovarBolsa(){
            print "<p>Bolsa renovada</p>";
        }

        public function pagarMensalidade(){
            print "<p>" . $this->getNome() . " é bolsista! Então paga com desconto!</p>";
        }
        
        public function getBolsa()
        {
                return $this->bolsa;
        }
        public function setBolsa($bolsa)
        {
                $this->bolsa = $bolsa;
        }
    }
?>