<?php 

    require_once 'index.php';

class Pessoas{
    private $nome;
    private $idade;
    private $sexo;

    
    function __construct($n,$i,$s){
        $this->nome = $n;
        $this->idade = $i;
        $this->sexo = $s;
    }

    function fazerAniver(){
        $this->setIdade($this->getIdade() + 1);
    }


    public function getSexo()
    {
        return $this->sexo;
    }
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
}
?>