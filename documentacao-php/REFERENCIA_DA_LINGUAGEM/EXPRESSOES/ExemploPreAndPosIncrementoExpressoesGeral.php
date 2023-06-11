<?php

/**
 * * O seguinte exemplo deve ajudá-lo a entender um pouco melhor pré e pós-incremento e expressões em geral: 
*/

function double($i) {
    return $i * 2;
}

$b = $a = 5; /*atribui o valor cinco ás variáveis $a e $b*/
$c = $a++;/*pós-incremento, atribui o valor original de $a(5) para $c*/
$e = $d = ++$b; /*pré-incremento, atribui o valor incrementado de $b(6) a $d e $e*/

/* neste ponto, tanto $d quanto $e são iguais a 6*/

$f = double($d++); /*atribui o dobro do valor de $d antes do incremento, 2 * 6 = 12 a $f*/
$g = double(++$e); /*atribui o dobro do valor de $e depois do incremento, 2 * 7 = 14 a $g*/
$h = $g += 10; /* primeiro, $g é incrementado de 10 e termina com o valor 24. o valor da atribuição (24) é então atribuído a $h, e $h termina com o valor 24 também*/

/**
 * Algumas expressões podem ser consideradas instruções. Neste caso, uma instrução na forma 'expr ;' ou seja, uma expressão seguida de um ponto e vírgula. Em '$b = $a = 5;', '$a = 5' é uma expressão válida, mas não é um comando por si só. '$b = $a = 5;' porém é um comando válido.
 * 
 *  Uma última coisa que vale mencionar é o valor-verdade de expressões. Em muitos eventos, principalmente em instruções condicionais e loops, você não está interessado no valor específico da expressão, mas somente se ela significa true ou false (o PHP não tem um tipo booleano dedicado). As constantes true e false (insensitivas ao caso) são seus dois valores booleanos possíveis. As vezes uma expressão é automaticamente convertida para um booleano.
 * 
 * 
*/
?>