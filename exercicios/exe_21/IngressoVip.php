<?php 

include("Ingresso.php");

class IngressoVip extends Ingresso {

    private float $valorAdicional;

    public function __construct(float $reaisP, float $valorAdicionalP) {
        parent::__construct($reaisP);
        $this->valorAdicional = $valorAdicionalP;
    }

    public function getValorAdicional() {
        return $this->valorAdicional;
    }

    public function setValorAdicional(float $novoValor) {
        $this->valorAdicional = $novoValor;
    }

    public function valorIngresso() {
        $valorIngresso = $this->getValor() + $this->valorAdicional;
        echo "Valor do Ingresso VIP com o adicional: R$ $valorIngresso";
    }
}  

?>