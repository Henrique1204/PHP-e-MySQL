<?php

class Pessoa{
    protected $nome;
    const ESPECIE = "Humana";
    public function __construct($tmpNome)
    {
        $this->nome = $tmpNome;
    }
    public function setNome($novoNome){
        $this->nome = $novoNome;
    }
    public function getNome(){
        return $this->nome;
    }
}

class Programador extends Pessoa{

    public $linguagem;

    public function __construct($tmpNome, $tmpLingua)
    {
        $this->nome = $tmpNome;
        $this->linguagem = $tmpLingua;
        echo "Objeto ".__CLASS__." foi definido";
    }

}
