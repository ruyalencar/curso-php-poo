<?php 

    require_once '/var/www/html/curso-php-poo/Aulas/Aula11b/index.php';
    
    abstract class Pessoa{
        private $nome ;
        private $idade ;
        private $sexo ;

        public function fazerAniver(){
            $this->setIdade($this->getIdade() + 1);
        }


        function __construct($n, $i, $s, )
        {
                $this->nome = $n;
                $this->idade = $i;
                $this->sexo = $s;
        }

        
        public function getNome()
        {
                return $this->nome;
        }
        public function setNome($nome)
        {
                $this->nome = $nome;;
        }
        public function getIdade()
        {
                return $this->idade;
        }
        public function setIdade($idade)
        {
                $this->idade = $idade;
        }
        public function getSexo()
        {
                return $this->sexo;
        }
        public function setSexo($sexo)
        {
                $this->sexo = $sexo;
        }
    }
?>