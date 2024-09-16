<?php 
require_once 'index.php';
class ContaBanco{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function abrirConta($ti){
        $this->setTipo($ti);
        $this->setStatus(true);
        switch($this->getTipo()){
            case "CC":
                $this->setSaldo(50);
                print "<p>Conta aberta</p>";
                break;
            case "CP":
                $this->setSaldo(150);
                print "<p>Conta aberta</p>";
                break;
        }
    }
    public function fecharConta(){
        if($this->getSaldo() > 0){
            print "<p>Conta com dinheiro, nõ posso fechá-la!</p>";
        }elseif($this->getSaldo() < 0){
            print "<p>Conta em débito</p>";
        }else {
            $this->setStatus(false);
        }
    }
    public function depositar($deposito){
        if ($this->getStatus()){    
            $this->setSaldo($this->getSaldo() + $deposito);
        }else {
            print "<p>Impossivel depositar</p>";
        }
    }
    public function sacar($sacar){
        if ($this->getStatus()){
            if ($this->getSaldo() > $sacar){
                $this->setSaldo($this->getSaldo() - $sacar);
            }else {
                print "<p>Saldo insuficiente</p>";
            }            
        }else {
            print "<p>Impossivel sacar</p>";
        }
    }
    public function pagarMensal(){
         if ($this->getTipo() == "CC"){
            $v =12;
         }elseif ($this->getTipo() == "CP"){
            $v = 20;
         }

         if ($this->getStatus()){   
            if ($this->getSaldo() > $v){
                $this->setSaldo($this->getSaldo() - $v);
            }else {
                print "<p>Saldo Insuficiente</p>";
            }
         }else {
            print "Impossivel pagar</p>";
         }
    }
    public function __construct($nome,$ti,$numc) {
        $this->setStatus(False);
        $this->setSaldo(0);
        $this->setnumConta($numc);
        $this->setTipo($ti);
        $this->setDono($nome);
        print "Conta criada";

    }

    public function getnumConta(){
        return $this->numConta;
    }
    public function setnumConta($n){
        $this->numConta = $n;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($t){
        $this->tipo = $t;
    }
    public function getDono(){
        return $this->dono;
    }
    public function setDono($d){
        $this->dono = $d;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($s){
        $this->saldo = $s;  
    }
    public function getStatus(){
        return $this->status;
    }
    public function setStatus($status){
        $this->status = $status;
    }
};
?>