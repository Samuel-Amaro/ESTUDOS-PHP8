<?php

namespace SistemaGerencimentoPedidosGrafica;

use Gerente\Gerente;
use Pedido\Pedido;
use Preco\Preco;
use Produto\Produto;

include_once("Gerente.php");
include_once("Preco.php");
include_once("Produto.php");
include_once("Pedido.php");


//criando um gerente
$g1 = new Gerente('Gerente Financeiro', '000.111.222-33', 'Karolina Marques', '1.560', 'time financeiro');
//criando um preco
$price = new Preco('1', 'impressão', '15.90');
//criando um produto
$pd1 = new Produto('1', 'Impressão', $price);
//criando um pedido
$p1 = new Pedido(date('d/m/y'), date('d/m/y'), '15.90', $g1, '');

function imprimeInfo(Gerente $g1, Preco $price, Produto $p1, Pedido $order) {
    echo "<h1>Pedido para grafica Martins</h1><p><b>Data emissão:</b><span>{$order->getDataHoraEmissao()}</span></p>
<p><b>Data finalização:</b><span>{$order->getDataHoraFinalizacao()}</span>
</p><p><b>Preço:</b><span>{$order->getPreco()}</span></p></p><p><b>Funcionario Solicitou</b>:</b><span>{$order->getFuncionarioSolicitou()}</span></p>
<p><b>Produto</b>:</b><span>{$order->getProduto()}</span></p>";
}

imprimeInfo();


?>