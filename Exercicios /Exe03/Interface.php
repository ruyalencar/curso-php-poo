<?php 

    require_once 'index.php';
    require_once '/var/www/html/curso-php-poo/Exercicios /Exe03/Classes/AcoesVideo.php';

    interface AcoesVideo{

        public function play();
        public function pause();
        public function like();

    }

?>