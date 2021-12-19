<?php

namespace Preco;

class Preco{

    private $idPreco;
    private $tipoProduto;
    private $preco;

    public function __construct($idPrecoP, $tipoProdutoP, $precoP) {
        $this->idPreco = $idPrecoP;
        $this->tipoProduto = $tipoProdutoP;
        $this->preco = $precoP;
    }

    /**
     * @return mixed
     */
    public function getIdPreco()
    {
        return $this->idPreco;
    }

    /**
     * @param mixed $idPreco
     */
    public function setIdPreco($idPreco): void
    {
        $this->idPreco = $idPreco;
    }

    /**
     * @return mixed
     */
    public function getTipoProduto()
    {
        return $this->tipoProduto;
    }

    /**
     * @param mixed $tipoProduto
     */
    public function setTipoProduto($tipoProduto): void
    {
        $this->tipoProduto = $tipoProduto;
    }

    /**
     * @return mixed
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * @param mixed $preco
     */
    public function setPreco($preco): void
    {
        $this->preco = $preco;
    }



}

?>