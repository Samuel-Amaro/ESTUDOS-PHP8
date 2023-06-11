<?php 

/*
 * EXEMPLO #1 ACESSANDO CLASSES GLOBAIS, FUNÇÕES E CONSTANTES DE UM NAMESPACE
*/

//declarando uma namespace
namespace Foo;
//declara uma função
function strlen() {}
//cria uma constante
const INI_ALL = 3;
//declaração de uma classe
class Exception {}

$a = \strlen('hi'); //chama a função global strlen
$b = \INI_ALL; //acessa a constante global INI_ALL
$c = new \Exception('error'); //cria uma instancia de objeto global da classe Exception

?>