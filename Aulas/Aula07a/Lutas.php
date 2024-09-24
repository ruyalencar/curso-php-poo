<?php 
require_once 'index.php'; 
require_once 'Lutador.php'; 
class Luta{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;


    public function marcarLuta($l1,$l2){
        if($l1->getCategoria()  === $l2->getCategoria()){
            print "----------------------------------------------------------";
            print "<p>Luta Marcada! </p>";
            $this->setAprovada(true);
            $this->setDesafiado($l2);
            $this->setDesafiante($l2);
        }else{
            print "----------------------------------------------------------";
            print "<p>Essa luta não pode ser marcada.</p>";
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
    }
    function lutar(){
        if($this->getAprovada() == true){
            print "----------------------------------------------------------";
            $this->getDesafiado()->apresentar();
            $this->getDesafiante()->apresentar();
            $vencedor = rand(0,2);
            switch($vencedor){
                case 0:
                    print "<p>Empatou!</p>";
                    $this->desafiado->EmpatarLuta();
                    $this->desafiante->EmpatarLuta();
                    break;
                case 1:
                    print "<p>" . $this->desafiado->getNome() . " Venceu</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2:
                    print "<p>" . $this->desafiante->getNome() . " Venceu </p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
            }

        }else{
            print "<p>Luta não pode acontecer</p>";
        }
    }

    private function getDesafiado(){
        return $this->desafiado;
    }
    private function setDesafiado($d){
        $this->desafiado = $d;    }
    private function getDesafiante(){
        return $this->desafiante;
    }
    private function setDesafiante($de){
        $this->desafiante = $de;
    }
    private function getRounds(){
        return $this->rounds;
    }
    private function setRounds($ro){
        $this->rounds = $ro;
    }
    private function getAprovada(){
        return $this->aprovada;
    }
    private function setAprovada($ap){
        $this->aprovada = $ap;
    }
}

?>