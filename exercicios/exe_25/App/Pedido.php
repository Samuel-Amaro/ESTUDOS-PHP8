<?php

namespace Pedido;
include("Funcionario.php");
include("Produto.php");
use Funcionario\Funcionario;
use Produto\Produto;

class Pedido {

    private string $dataHoraEmissao;
    private string $dataHoraFinalizacao;
    private float $preco;
    private Funcionario $funcionarioSolicitou;
    private Produto $produto;

    public function __construct($dataHoraEmissaoP, $dataHoraFinalizacaoP, $precoP, $funcionarioSolicitouP, $produtoP) {
        $this->dataHoraEmissao = $dataHoraEmissaoP;
        $this->dataHoraFinalizacao = $dataHoraFinalizacaoP;
        $this->preco = $precoP;
        $this->funcionarioSolicitou = $funcionarioSolicitouP;
        $this->produto = $produtoP;
    }

    /**
     * @return string
     */
    public function getDataHoraEmissao(): string
    {
        return $this->dataHoraEmissao;
    }

    /**
     * @param string $dataHoraEmissao
     */
    public function setDataHoraEmissao(string $dataHoraEmissao): void
    {
        $this->dataHoraEmissao = $dataHoraEmissao;
    }

    /**
     * @return string
     */
    public function getDataHoraFinalizacao(): string
    {
        return $this->dataHoraFinalizacao;
    }

    /**
     * @param string $dataHoraFinalizacao
     */
    public function setDataHoraFinalizacao(string $dataHoraFinalizacao): void
    {
        $this->dataHoraFinalizacao = $dataHoraFinalizacao;
    }

    /**
     * @return float
     */
    public function getPreco(): float
    {
        return $this->preco;
    }

    /**
     * @param float $preco
     */
    public function setPreco(float $preco): void
    {
        $this->preco = $preco;
    }

    /**
     * @return Funcionario
     */
    public function getFuncionarioSolicitou(): Funcionario
    {
        return $this->funcionarioSolicitou;
    }

    /**
     * @param Funcionario $funcionarioSolicitou
     */
    public function setFuncionarioSolicitou(Funcionario $funcionarioSolicitou): void
    {
        $this->funcionarioSolicitou = $funcionarioSolicitou;
    }

    /**
     * @return Produto
     */
    public function getProduto(): Produto
    {
        return $this->produto;
    }

    /**
     * @param Produto $produto
     */
    public function setProduto(Produto $produto): void
    {
        $this->produto = $produto;
    }


}
