<?php 

//inlcui definição da classe ContaBancaria
include("Conta.php");

class ContaImposto extends ContaBancaria{
    
    function __construct(string $numeroP = "00000-0", string $agenciaP = "0000-0", float $saldoP = 0.0, int $codigo_tipoP = 1, float $percentualImposto) {
        //chama o construtor da classe pai por meio do operador de resolução de escopo
        parent::__construct($numeroP, $agenciaP, $saldoP,$codigo_tipoP);
        //atributo dessa classe
        $this->percentualImposto = $percentualImposto;
    }

    private float $percentualImposto;

    public function getPercentualImposto() {
        return $this->percentualImposto;
    }

    public function setPercentualImposto(float $perImpP) {
        $this->percentualImposto = $perImpP;
    }

    public function calcularImposto() {
        $calculo = $this->saldo * $this->percentualImposto;
        $this->saldo = $this->saldo - $calculo;
        echo "Valor: $calculo referente ao desconto do Calculo do Imposto! </br>";
    }
}

?>