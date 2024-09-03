<?php 
class Caneta{
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar() {
        if ($this->tampada == true) {
            print "ERRO! Não posso rabiscar";
        }else {
            print "<p>Estou rabiscando!</p>";
        }
    }
    function tampar() {
        $this ->tampada = true;
    }
    function destampar() {
        $this ->tampada = false;
    }
};

?>