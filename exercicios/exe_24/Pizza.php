<?php 

require_once("Prato.php");

class Pizza extends Prato{

    private string $borda;
    private string $recheio;
    private string $molho;

    public function __construct(string $bordaP, string $recheioP, string $molhoP,  float $precoVendaP, string $dataValidadeP, float $pesoP) {
        //chama o construtor da super classe
        parent::__construct($precoVendaP, $dataValidadeP, $pesoP);
        $this->borda = $bordaP;
        $this->recheio = $recheioP;
        $this->molho = $molhoP;
    }

    public function setBorda(string $novaBorda) {
        $this->pao = $novoPao;
    }
    public function getBorda() : string
    {
        return $this->borda;
    }
    public function setRecheio(string $newRecheio) {
        $this->recheio = $newRecheio;
    }
    public function getRecheio() : string{
        return $this->recheio;
    }
    public function setMolho(string $newMolho) {
        $this->molho = $newMolho;
    }
    public function getMassa() : string{
        return $this->molho;
    }

    public function calcularPreco() {
        setPreco();        
    }

    public function __toString(): string {
        return "<h4>Pizza</h4>
                    <strong>Borda:</strong> {$this->borda},
                    <strong>Recheio:</strong> {$this->recheio},
                    <strong>Molho:</strong> {$this->molho},
                    <strong>Data Validade:</strong> {$this->getDataValidade()},
                    <strong>Preço Venda(R$):</strong> {$this->getPrecoVenda()},
                    <strong>Peso:</strong> {$this->getPeso()}mgs.
        " . "</br>"; 
    }

    public function info(): string {
        return  "<h2 style=\"width: 100%; text-align: center;\">Pizza</h2>
                <table style=\"width: 100%; border: 1px solid black;\">
                          <tr style=\"border: 1px solid black;\">
                            <th style=\"text-align: center;\">Borda</th>
                            <th style=\"text-align: center;\">Recheio</th>
                            <th style=\"text-align: center;\">Molho</th>
                            <th style=\"text-align: center;\">Data Validade</th>
                            <th style=\"text-align: center;\">Preço de Venda(R$)</th>
                            <th style=\"text-align: center;\">Peso</th>
                          </tr>
                          <tr style=\"border: 1px solid black;\">
                            <td style=\"text-align: center;\">{$this->borda}</td>
                            <td style=\"text-align: center;\">{$this->recheio}</td>
                            <td style=\"text-align: center;\">{$this->molho}</td>
                            <td style=\"text-align: center;\">{$this->getDataValidade()}</td>
                            <td style=\"text-align: center;\">{$this->getPrecoVenda()}</td>
                            <td style=\"text-align: center;\">{$this->getPeso()}mgs.</td>
                          </tr>
                </table>";
    }

    
}

?>