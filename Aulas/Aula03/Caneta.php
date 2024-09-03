<?php 
class Caneta {
    private $modelo;
    private $ponta;
    private $tampada;
    private $cor;
    
    public function __construct($m,$p,$c,$t) {
        $this->setModelo($m);
        $this->setCor($c);
        $this->setPonta($p);
        $this->setTampada($t);
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($m) {
        $this->modelo = $m;
    }

    public function getPonta() {
        return $this->ponta;
    }

    public function setPonta($p) {
        $this->ponta = $p;
    }

    public function getCor() {
        return $this->cor;
    }
    public function setCor($c) {
        $this->cor = $c;
    }

    public function getTampada() {
        return $this->tampada;
    }

    public function setTampada($t) {
        $this->tampada = $t;
    }

}
?>