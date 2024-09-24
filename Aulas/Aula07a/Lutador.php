<?php 
require_once 'Lutas.php';
require_once 'index.php';
class Lutador{
    private $nome;  
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;  
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    function __construct($no,$na,$id,$al,$pe,$vi,$de,$em){
        $this->setNome($no);
        $this->setNascionalidade($na);
        $this->setIdade($id);
        $this->setAltura($al);
        $this->setPeso($pe);
        $this->setVitorias($vi);
        $this->setDerrotas($de);
        $this->setEmpates($em);
    }


    function apresentar(){
        print "<pre>";
        print "----------------------------------------------------";
        print "<br>Lutador: " . $this->getNome();
        print "<br>Origem: " . $this->getNascionalidade();
        print "<br>Idade: " . $this->getIdade();
        print "<br>Altura: " . $this->getAltura() . "m de altura";
        print "<br>";
        print "<br>Pesando: " . $this->getPeso() . "Kg";
        print "<br>Ganhou: " . $this->getVitorias();
        print "<br>Perdeu: " . $this->getDerrotas();
        print "<br>Empatou: " . $this->getEmpates();
        print "</pre>";
    }
    function status(){
        print "<pre>";
        print "----------------------------------------------------";
        print "<br>" . $this->getNome();
        print "<br>é um peso " . $this->getCategoria();
        print "<br>" . $this->getVitorias() . " vitórias";
        print "<br>" . $this->getDerrotas() . " derrotas";
        print "<br>" . $this->getEmpates() . " empates";
        print "</pre>";
    }
    function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }

    private function getNome(){
        return $this->nome;
    }
    private function setNome($no){
        $this->nome = $no;
    }

    private function getNascionalidade(){
        return $this->nacionalidade;
    }
    private function setNascionalidade($na){
        $this->nacionalidade = $na;
    }
    
    private function getIdade(){
        return $this->idade;
    }
    private function setIdade($id){
        $this->idade = $id;
    }
    
    private function getAltura(){
        return $this->altura;
    }
    private function setAltura($al){
        $this->altura = $al;
    }
    
    private function getPeso(){
        return $this->peso;
    }
    private function setPeso($pe){
        $this->peso = $pe;
        $this->setCategoria($this->getPeso());
    }
    
    private function getCategoria(){
        return $this->categoria;
    }
    private function setCategoria($ca){
        if($ca < 52.2){
            $this->categoria = "Inválido";
        }elseif ($ca < 70.3){
            $this->categoria = "Leve";
        }elseif($ca < 82.9){
            $this->categoria = "Médio";
        }elseif ($ca <= 120.2){
            $this->categoria = "Pesado";
        }else{
            $this->categoria = "Inválido";
        }
    }
    
    private function getVitorias(){
        return $this->vitorias;
    }
    private function setVitorias($vi){
        $this->vitorias = $vi;
    }
    
    private function getDerrotas(){
        return $this->derrotas;
    }
    private function setDerrotas($de){
        $this->derrotas = $de;
    }
    
    private function getEmpates(){
        return $this->empates;
    }
    private function setEmpates($em){
        $this->empates = $em;
    }
    
}
?>