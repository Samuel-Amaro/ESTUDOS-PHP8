<?php 

class Pessoa{

    private string $nome;
    private int $idade;

    function __construct(string $nomeP, int $idadeP) {
        $this->nome = $nomeP;
        $this->idade = $idadeP;
    }

    public function getNome() {
          return $this->nome;  
    }
    public function setNome(string $novo) {
        $this->nome = $novo;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function setIdade(int $idade) {
        return $this->idade = $novo;
    }

    public function exibirDados() {
        echo "Nome: '$this->name' </br>";
        echo "Idade: '$this->idade' </br>";
    }
}




?>