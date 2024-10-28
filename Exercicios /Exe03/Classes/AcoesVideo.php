<?php 

    require_once '/var/www/html/curso-php-poo/Exercicios /Exe03/Interface.php';

    class Video implements AcoesVideo{
        private $titulo ;
        private $avaliacao ;
        private $views ;
        private $curtidas ;
        private $reproduzindo ;


        function __construct($titulo)
        {
                $this->titulo = $titulo;
                $this->avaliacao = 1;
                $this->views = 0;
                $this->curtidas = 0;
                $this->reproduzindo = false;
        }

        function play(){
                $this->setReproduzindo(true);
        }
        function pause(){
                $this->setReproduzindo(false);
        }
        function like(){
                $this->setCurtidas($this->getCurtidas() + 1);
        }


        public function getTitulo()
        {
                return $this->titulo;
        }
        public function setTitulo($titulo)
        {
                $this->titulo = $titulo;
        }
        public function getAvaliacao()
        {
                return $this->avaliacao;
        }
        public function setAvaliacao($avaliacao)
        {
                $media = ($this->avaliacao + $avaliacao) / $this->views;
                $this->avaliacao = $media;
        }
        public function getViews()
        {
                return $this->views;
        }
        public function setViews($views)
        {
                $this->views = $views;
        }
        public function getCurtidas()
        {
                return $this->curtidas;
        }
        public function setCurtidas($curtidas)
        {
                $this->curtidas = $curtidas;
        }
        public function getReproduzindo()
        {
                return $this->reproduzindo;
        }
        public function setReproduzindo($reproduzindo)
        {
                $this->reproduzindo = $reproduzindo;
        }
    }

?>