<?php 

/**
 * * OPERADORES LÓGICOS
 * 
 
    EXEMPLO: $a and $b;
    NOME: E;
    RESULTADO: Verdadeiro (true) se tanto $a quanto $b são verdadeiros.

    EXEMPLO: $a or b;
    NOME: OU;
    RESULTADO: Verdadeiro se $a ou $b são verdadeiros;

    EXEMPLO: $a xor $b;
    NOME: XOR;
    RESULTADO: Verdadeiro se $a ou $b são verdadeiros, mas não ambos.

    EXEMPLO: !$a;
    NOME: NÃO;
    RESULTADO: Verdadeiro se $a não é verdadeiro;

    EXEMPLO: $a && $b;
    NOME: E;
    RESULTADO: Verdadeiro se tanto $a quanto $b são verdadeiros.

    EXEMPLO: $a || $b;
    NOME: OU;
    RESULTADO: Verdadeiro se $a ou $b são verdadeiros.

 * 
 * A razão para as duas variantes dos operandos "and" e "or" é que eles operam com precedências diferentes.
*/

//EXEMPLO #1 ILUSTRANDO OPERADORES LÓGICOS

// --------------------------------------
// foo() nunca será chamada porque toda a expressão sofre curto circuito

$a = (false && foo());
$b = (true || foo());
$c = (false and foo());
$d = (true or foo());


// -----------------------------------------
// "||" tem maior precedência que "or"
//O resultado da expressão (false || true) é atribuido em $e
//Funciona como: ($e = (false || true))
$e = false || true;

//A constante false é atribuída a $f antes que o "or" ocorra
// Funciona como: (($f = false) or true)
$f = false or true;

var_dump($e, $f);

//--------------------------------------------
//"&&" tem maior precedência que "and"
//o resultado da expressão (true && false) é atribuido em $g
//Funciona como: ($g = (true && false))
$g = true && false;

//A constante true é atribuida em $h antes que o "and" ocorra
//Funciona como: (($h = true) and false)
$h = true and false;

var_dump($g, $h);
?>