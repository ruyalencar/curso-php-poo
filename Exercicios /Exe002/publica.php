<?php 
require_once 'pessoa.php';
require_once 'livros.php';

    interface Publicacao{
        function abrir();
        function fechar();
        function folhear($p);
        function avançarPag();
        function voltarPag();
    }
?>