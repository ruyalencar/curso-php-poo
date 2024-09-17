<?php 
require_once 'Controlador.php';


class ControleRemoto implements Controlador{

    protected $volume;
    protected $ligado;
    protected $tocando;


    function __construct(){
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
    }

    private function setVolume($v){
        $this->volume = $v;
    }
    private function getVolume(){
        return $this->volume;
    }
    private function setLigado($l){
        $this->ligado = $l;
    }
    private function getLigado(){
        return $this->ligado;
    }
    private function setTocando($t){
        $this->tocando = $t;
    }
    private function getTocando(){
        return $this->tocando;
    }


    public function ligar() {
        $this->setLigado(true);
    }
    public function desligar() {
        $this->setLigado(false);
    }
    public function abrirMenu() {
        print "<br>Está ligado?: " . ($this->getLigado() ? "SIM" : "NÃO");
        print "<br>Está Tocando?: " . ($this->getTocando() ? "SIM" : "NÃO");
        print "<br>Volume: " . $this->getVolume();
        for ($i=0; $i <= $this->getVolume(); $i+=10){
            print "|";
        }
        print "<br>";
    }
    public function fecharMenu() {
        print "<p>Fechando menu. . .</p>";
    }
    public function maisVolume() {
        if ($this->getLigado()){
            $this->setVolume($this->getVolume() + 5);
        }
    }
    public function menosVolume() {
        if ($this->getLigado()){
            $this->setVolume($this->getVolume() - 5);
        }
    }
    public function ligarMudo() {
        if ($this->getLigado() && $this->getVolume()>0){
            $this->setVolume(0);
        }
    }
    public function desligarMudo() {
        if ($this->getLigado() && $this->getVolume()==0){
            $this->setVolume(50);
        }
    }
    public function play() {
        if($this->getLigado() && !($this->getTocando())){
            $this->tocando = true;
        }
    }
    public function pause() {
        if($this->getLigado() && $this->getTocando()){
            $this->tocando = false;
        }
    }




};
?>