<?php 

//inclui a definição da classe ContaImposto
include("Imposto.php");

# instanciado objetos
$c1 = new ContaBancaria("00132-3", "0348-0", 1343.55, 1);
$ci = new ContaImposto("00132-3", "0348-0", 1343.55, 1, 0.2);

//movimentações da conta
$c1->mostraSaldo();
$c1->sacar(1343.56);
$c1->mostraSaldo();
$c1->depositar(0.0);
$c1->mostraSaldo();
$c1->depositar(0.50);
$c1->mostraSaldo();
$c1->sacar(1000);
$c1->mostraSaldo();

//calculando o imposto
$ci->calcularImposto();
$c1->mostraSaldo();

$ci->mostraSaldo();

?>