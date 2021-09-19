<?php 

require_once("Prato.php");

class Salgadinho extends Prato{

    private string $tipo;
    private string $recheio;
    private string $massa;

    public function __construct(string $tipoP, string $recheioP, string $massaP, float $precoVendaP, string $dataValidadeP, float $pesoP) {
        //chama o construtor da super classe
        parent::__construct($precoVendaP, $dataValidadeP, $pesoP);
        $this->tipo = $tipoP;
        $this->recheio = $recheioP;
        $this->peso = $pesoP;
        $this->massa = $massaP;
    }

    public function setTipo(string $novoTipo) {
        $this->tipo = $novoTipo;
    }
    public function getTipo() : string
    {
        return $this->tipo;
    }
    public function setRecheio(string $newRecheio) {
        $this->recheio = $newRecheio;
    }
    public function getRecheio() : string{
        return $this->recheio;
    }
    public function setMassa(string $newMassa) {
        $this->massa = $newMassa;
    }
    public function getMassa() : string{
        return $this->massa;
    }

    public function calcularPreco() {
        setPreco();        
    }

    public function __toString(): string { 
        return "<h4>Salgadinho</h4>
                    <strong>Tipo:</strong> {$this->tipo},
                    <strong>Recheio:</strong> {$this->recheio},
                    <strong>Massa:</strong> {$this->massa},
                    <strong>Data Validade:</strong> {$this->getDataValidade()},
                    <strong>Preço Venda(R$):</strong> {$this->getPrecoVenda()},
                    <strong>Peso:</strong> {$this->getPeso()}gms 
        " . "</br>"; 
    }

    public function info(): string { 
        return "<h2 style=\"width: 100%; text-align: center;\">Salgadinho</h2>
        <table style=\"width: 100%; border: 1px solid black;\">
                  <tr style=\"border: 1px solid black;\">
                    <th style=\"text-align: center;\">Tipo</th>
                    <th style=\"text-align: center;\">Recheio</th>
                    <th style=\"text-align: center;\">Massa</th>
                    <th style=\"text-align: center;\">Data Validade</th>
                    <th style=\"text-align: center;\">Preço de Venda(R$)</th>
                    <th style=\"text-align: center;\">Peso</th>
                  </tr>
                  <tr style=\"border: 1px solid black;\">
                    <td style=\"text-align: center;\">{$this->tipo}</td>
                    <td style=\"text-align: center;\">{$this->recheio}</td>
                    <td style=\"text-align: center;\">{$this->massa}</td>
                    <td style=\"text-align: center;\">{$this->getDataValidade()}</td>
                    <td style=\"text-align: center;\">{$this->getPrecoVenda()}</td>
                    <td style=\"text-align: center;\">{$this->getPeso()}mgs.</td>
                  </tr>
        </table>";
    }
}


?>