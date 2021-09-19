<?php 


class Pedido{

    private string $nomeCliente;
    private float $taxaDeServico;
    private array $itensConsumidos;

    public function __construct(string $nomeClienteP, float $taxaDeServicoP, array $itensConsumidosP) {
        $this->nomeCliente = $nomeClienteP;
        $this->taxaDeServico = $taxaDeServicoP;
        $this->itensConsumidos = $itensConsumidosP;
    }
    
    public function getNomeCliente() : string {
        return $this->nomeCliente;
    }
    public function setNomeCliente(string $novoNome) {
        $this->nomeCliente = $novoNome;
    }
    public function setTaxaDeServico(float $novoValorTaxa) {
        $this->taxaDeServico = $novoValorTaxa;
    }
    public function getTaxaDeServico() : float{
        return $this->taxaDeServico;
    }
    public function getItensConsumidos() : array{
        return $this->itensConsumidos;
    }
    public function setItensConsumidos(array $itensConsumidos) {
        $this->itensConsumidos = $itensConsumidos;
    }
    public function calcularTotal() {
        $somaTotal = 0;
        for($i = 0; $i < count($this->itensConsumidos); $i++) {
            $somaTotal = $somaTotal + $this->itensConsumidos[$i]->getPrecoVenda();
        }
        return $somaTotal;
    }
    public function mostrarFatura():string {
        return "</br><h4 style=\"display: inline;\">Sua fatura(R$):</h4> {$this->calcularTotal()}.</br>";
    }

    public function __toString(): string {
        return "</br><h3 style=\"display: inline;\">Pedido:</h3> 
                <table style=\"width: 100%\">
                    <tr>
                        <th>Nome Cliente</th>
                        <th>Taxa serviço</th>
                    </tr>
                    <tr>
                        <tr>{$this->nomeCliente}</tr>
                        <tr>{$this->taxaDeServico}</tr>
                    </tr>
                </table>" . $str . "</br>";  
    }

    public function info(): string {
        $str = "";
        for($i = 0; $i < count($this->itensConsumidos); $i++) {
            $str = $str . $this->itensConsumidos[$i]->info();
        }
        return "<h2 style=\"width: 100%; text-align: center;\">Pedido:</h2> 
                <table style=\"width: 100%; border: 1px solid black;\">
                    <tr>
                        <th style=\"text-align: center; \">Nome Cliente</th>
                        <th style=\"text-align: center; \">Taxa serviço</th>
                    </tr>
                    <tr>
                        <td style=\"text-align: center; \">{$this->nomeCliente}</td>
                        <td style=\"text-align: center; \">{$this->taxaDeServico}</td>
                    </tr>
                </table>
                <h2>Itens Consumidos:</h2></br>" . $str . "</br>"
        ;  
    }
}



?>