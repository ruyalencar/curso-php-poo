<?php 
require_once 'pessoa.php';
require_once 'publica.php';

 class Livro implements Publicacao{
    private $titulo ;
    private $autor ;
    private $totPaginas ;
    private $pagAtual ;
    private $aberto ;
    private $leitor ;

    public function __construct($t,$a,$tot,$l)
    {
        $this->titulo = $t ; 
        $this->autor = $a ; 
        $this->totPaginas = $tot ; 
        $this->aberto = false;
        $this->pagAtual = 0;
        $this->leitor = $l ; 
    }


    public function abrir(){
        $this->aberto = true;
    }
    public function fechar(){
        $this->aberto = false;
    }
    public function folhear($p){
        if ($p > $this->getTotPaginas()){
            $this->pagAtual = 0 ;
        }else {
            $this->pagAtual = $p ;
        }
    }
    public function avançarPag(){
        if ($this->getPagAtual() < $this->getTotPaginas()){
            $this->pagAtual ++ ;
        }else {
            $this->pagAtual = 0;
        }
    }
    public function voltarPag(){
        $this->pagAtual --;
    }
    function detalhes(){
        print "<hr>Livro " . $this->getTitulo() . " escrito por " . $this->getAutor();
        print "<br> Páginas: " . $this->getTotPaginas() . " Atual: " . $this->getPagAtual();
        print "<br> Sendo lido por " . $this->leitor->getNome();
    }


    public function getLeitor()
    {
        return $this->leitor;
    }

    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;
    }

    public function getAbeto()
    {
        return $this->aberto;
    }

    public function setAbeto($abeto)
    {
        $this->aberto = $abeto;
    }

    public function getPagAtual()
    {
        return $this->pagAtual;
    }

    public function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;
    }

    public function getTotPaginas()
    {
        return $this->totPaginas;
    }

    public function setTotPaginas($totPaginas)
    {
        $this->totPaginas = $totPaginas;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
 }
?>