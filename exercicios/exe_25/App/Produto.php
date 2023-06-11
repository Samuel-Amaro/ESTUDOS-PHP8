<?php

namespace Produto;
include_once("Preco.php");
use Preco\Preco;


class Produto{

    private int $idProduto;
    private string $tipo;
    private Preco $preco;

    public function __construct(int $idProdutoP, string $tipoP, Preco $precoP) {
        $this->idProduto = $idProdutoP;
        $this->tipo = $tipoP;
        $this->preco = $precoP;
    }

    /**
     * @return int
     */
    public function getIdProduto(): int
    {
        return $this->idProduto;
    }

    /**
     * @param int $idProduto
     */
    public function setIdProduto(int $idProduto): void
    {
        $this->idProduto = $idProduto;
    }

    /**
     * @return string
     */
    public function getTipo(): string
    {
        return $this->tipo;
    }

    /**
     * @param string $tipo
     */
    public function setTipo(string $tipo): void
    {
        $this->tipo = $tipo;
    }

    /**
     * @return Preco
     */
    public function getPreco(): Preco
    {
        return $this->preco;
    }

    /**
     * @param Preco $preco
     */
    public function setPreco(Preco $preco): void
    {
        $this->preco = $preco;
    }


}

?>