<?php 

/**
 * * EXEMPLO #1 Acessando classes globais dentro de um namespace
*/

//declarando um namespace, um espaço de nomes reservado, para declarar nomes para funções, classes, constnates
namespace A\B\C;

class Exception extends \Exception {}

$a = new Exception('hi'); //$a e um objeto da class A\B\C\Exception

$b = new \Exception('hi'); //$b e um objeto da class Exception

//não existe no namespace, e não foi encontrado dentro do namespace
$c = new ArrayObject; //erro fatal, class A\B\C\ArrayObject não encontrado

/**
 *  Para funções e constantes, o PHP voltará para funções globais ou constantes se uma função com espaço de nomes ou constante não existir.
*/


?>