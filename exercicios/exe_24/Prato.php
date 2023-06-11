    <?php 

class Prato{

    private float $precoVenda;
    private string $dataValidade;
    private float $peso;

    public function __construct(float $precoVendaP, string $dataValidadeP, float $pesoP) {
        $this->precoVenda = $precoVendaP;
        $this->dataValidade = $dataValidadeP;
        $this->peso = $pesoP;
    }

    public function setPrecoVenda(float $newPrecoVenda) {
        $this->precoVenda = $newPrecoVenda;
    }
    public function getPrecoVenda() : float {
        return $this->precoVenda;
    }
    public function setDataValidade(string $newDataValidade) {
        $this->dataValidade = $newDataValidade;
    }
    public function getDataValidade() : string {
        return $this->dataValidade;
    }
    public function setPeso(float $newPeso) {
        $this->peso = $newPeso;
    } 
    public function getPeso() : float{
        return $this->peso;
    }

    public function __toString(): string {
        return "</br> ## Prato ##
                    Data Validade: {$this->getDataValidade()},
                    Preço Venda: {$this->getPrecoVenda()},
                    Peso: {$this->getPeso()}
        " . "</br>"; 
    }

    public function info(): string {
        return "</br> ## Prato ##
                    Data Validade: {$this->getDataValidade()},
                    Preço Venda: {$this->getPrecoVenda()},
                    Peso: {$this->getPeso()}
        " . "</br>"; 
    }

}


?>