<?php

/**
 * Herdar variáveis do escopo pai não é o mesmo que usar variáveis globais. Variáveis globais existem no escopo global, o qual é o mesmo não importa a função sendo executada. O escopo pai de um closure é a função no qual o closure foi declarado (não necessariamente a função a partir do qual ele foi chamado). Veja o exemplo a seguir: 
 * 
 * * Exemplo #4 Closures e escopo
 * 
 * Um exemplo básico de carrinho de compras que contém uma lista de produtos
 * e a quantidade de cada produto. Inclui um método que
 * calcula o preço total dos itens no carrinho utilizando uma
 * closure como callback.
*/

class Cart{
    const PRICE_BUTTER = 1.00;
    const PRICE_MILK = 3.00;
    const PRICE_EGGS = 6.95;
    protected $products = array();
    public function add($product, $quantity) {
        $this->products[$product] = $quantity;
    }
    public function getQuantity($product) {
        return isset($this->products[$product]) ? $this->products[$product] : FALSE;
    }
    public function getTotal($tax) {
        $total = 0.00;
        $callback = function($quantity, $product) use ($tax, &$total) {
            $pricePerItem = constant(__CLASS__."::PRICE_".strtoupper($product));
            $total += ($pricePerItem * $quantity) * ($tax + 1.0);
        };

        array_walk($this->products, $callback);
        return round($total, 2);;
    }
}

$my_cart = new Cart;

//adiciona alguns itens no carrinho
$my_cart->add('butter', 1);
$my_cart->add('milk', 3);
$my_cart->add('eggs', 6);

//Imprima o total com um imposto sobre vendas de 5%.
print $my_cart->getTotal(0.05) . "\n";
//o resultado e 54.29

?>