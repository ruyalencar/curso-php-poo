<?php 
class Caneta{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar() {
        if ($this->tampada == true) {
            print "ERRO! Não posso rabiscar";
        }else {
            print "<p>Estou rabiscando!</p>";
        }
    }
    public function tampar() {
        $this ->tampada = true;
    }
    public function destampar() {
        $this ->tampada = false;
    }
};

?>