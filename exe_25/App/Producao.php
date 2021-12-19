<?php

namespace Producao;
use Pedido\Pedido;
include_once("Pedido.php");

class Producao{
    private $pedidos = array();

    public function __construct($pedidosP) {
        $this->pedidos = $pedidosP;
    }

    public function filaPedidos() : array{
        return $this->pedidos;
    }

    /**
     * @return array
     */
    public function getPedidos(): array
    {
        return $this->pedidos;
    }

    /**
     * @param array $pedidos
     */
    public function setPedidos(array $pedidos): void
    {
        $this->pedidos = $pedidos;
    }


}

?>