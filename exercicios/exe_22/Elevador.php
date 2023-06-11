<?php 

class Elevador{

    # propriedades

    private int $andarAtual;
    private const TERREO = 0;
    private int $totalAndares;
    private int $capacidadeElevador;
    private int $qtdPessoasPresentes;

    # construtor

    public function __construct(int $capacidadeElevadorP, int $totalAndaresP) {
        $this->andarAtual = 0; //TERREO
        $this->totalAndares = $totalAndaresP;
        $this->capacidadeElevador = $capacidadeElevadorP;
       $this->qtdPessoasPresentes = 0;
    }

    # metodos acessores de atributos
    public function setAndarAtual(int $novoAndarAtual) {
        $this->andarAtual = $novoAndarAtual;
    }
    public function setTotalAndares(int $novoTotalAndar) {
        $this->totalAndares = $novoTotalAndar;
    }
    public function setCapacidadeElevador(int $novoCapacidadeElevador) {
        $this->capacidadeElevador = $novoCapacidadeElevador;
    }
    public function setQtdPessoasPresentes(int $valor) {
        $this->qtdPessoasPresentes = $valor;
    }
    public function getAndarAtual() {
        return $this->andarAtual;
    }
    public function getTotalAndares() {
        return $this->totalAndares;
    }
    public function getCapacidadeElevador() {
        return $this->capacidadeElevador;
    }
    public function getQtdPessoasPresentes() {
        return $this->qtdPessoasPresentes;
    }

    public function entrar() {
       if($this->capacidadeElevador === $this->qtdPessoasPresentes) {
            echo "Não ha espaço no elevador! </br>";
       }else{
           $this->qtdPessoasPresentes = $this->qtdPessoasPresentes + 1;
       }
    }
    public function sair() {
        if($this->qtdPessoasPresentes > 0) {
            $this->qtdPessoasPresentes = $this->qtdPessoasPresentes - 1;
        }else{
            echo "Elevador Esta Vazio! </br>";
        }
    }
    public function subir() {
        if($this->andarAtual === $this->totalAndares) {
           echo "Elevador se encontra no ultimo andar! </br>"; 
        }else{
            $this->andarAtual = $this->andarAtual + 1;
        }
    }
    public function descer() {
        if($this->andarAtual === 0) {
            echo "Elevador se encontra no Terreo! </br>";
        }else{
            $this->andarAtual = $this->andarAtual - 1;
        }
    }
    public function status() {
        echo "Andar Atual: {$this->getAndarAtual()} </br> Total Andares: {$this->getTotalAndares()} </br> Capacidade Elevador: {$this->getCapacidadeElevador()}  </br> Quantidade Pessoas Presentes Elevador: {$this->getQtdPessoasPresentes()} </br>";
    }
}

?>