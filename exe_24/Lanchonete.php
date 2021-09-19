<?php 

include("Salgadinho.php");
include("Lanche.php");
include("Pizza.php");
include("Pedido.php");


$s1 = new Salgadinho("frito", "frango", "massa para coxinha", 1.75, "31/07/2021", 0.350);
//echo $s1->info();
$l1 = new Lanche("Brioche", "catupiri", "molho verde", 24.45, "01/07/2021", 0.455);
//echo $l1->info();
$p1 = new Pizza("Chocolate", "Catupiri", "Molho vermelho", 36.79, "12/08/2021", 0.965);
//echo $p1->info();
$itensConsumidos = array($s1, $l1, $p1);
$ped1 = new Pedido("Bill Gates", 4.50, $itensConsumidos);
echo $ped1->info();
echo $ped1->mostrarFatura();

?>