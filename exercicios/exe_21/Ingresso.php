<?php 

class Ingresso{
    
    private float $reais;

    public function __construct(float $reaisP) {
        $this->reais = $reaisP;
    }

    public function getValor() {
        return $this->reais;
    }

    public function setValor(float $reais) {
        $this->reais = $reais;
    }

    public function imprimirValor() {
        echo "Valor Do Ingresso Normal: R$ $this->reais </br>";
    }
}

?>