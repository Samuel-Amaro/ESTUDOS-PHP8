<?php 

include("IngressoVip.php");

//cria um ingresso
$ing1 = new Ingresso(129.45);

//cria um ingresso vip com valor adicional
$ing1Vip = new IngressoVip($ing1->getValor(), 15.43);

//mostra diferença de valores
$ing1->imprimirValor();

$ing1Vip->valorIngresso();

?>