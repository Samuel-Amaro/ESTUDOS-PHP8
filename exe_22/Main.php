<?php 

include("Elevador.php");

$e1 = new Elevador(5, 4);
$e1->status();
$e1->entrar();
$e1->status();
$e1->entrar();
$e1->status();
$e1->subir();
$e1->status();
$e1->subir();
$e1->status();
$e1->descer();
$e1->status();


?>