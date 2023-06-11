<?php 

/**
 * * OPERADORES DE TIPO
 * 
 * instanceof não lança erros se a variável testada não for um objeto, apenas retorna false. Constantes, entretanto, não são permitidas.
 * 
 * Exemplo #6 Utilizando instanceof para testar outras variáveis
*/

$a = 1;
$b = NULL;
//$c = imagecreate(5, 5);
//bool(false)
//varifica se $a e instancia da class stdClass
var_dump($a instanceof stdClass); //inteiro
//bool(false)
//varifica se $b e instancia da class stdClass
var_dump($b instanceof stdClass); //NULL
//bool(false)
//varifica se $c e instancia da class stdClass
var_dump($c instanceof stdClass); //resource
//bool(false)
//varifica se FALSE e instancia da class stdClass
var_dump(FALSE instanceof stdClass);

?>