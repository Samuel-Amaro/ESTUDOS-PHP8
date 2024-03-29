<?php

/**
 * * EXPRESSÕES
 * 
 *  Expressões são os blocos de construção mais importantes do PHP. No PHP, quase tudo o que você escreve são expressões. A maneira mais simples e ainda mais precisa de definir uma expressão é "tudo o que tem um valor".
 * 
 * As formas mais básicas de expressões são constantes e variáveis. Quando você digita "$a = 5", você está atribuindo '5' dentro de $a. '5' obviamente tem o valor 5, ou em outras palavras '5' é uma expressão com o valor de 5 (nesse caso '5' é uma constante inteira).
 * 
 * Depois desta atribuição, você pode esperar que o valor de $a seja 5 também, assim se você escrever $b = $a, você pode esperar que ele se comporte da mesma forma que se você escrevesse $b = 5. Em outras palavras, $a é uma expressão com valor 5 também. Se tudo funcionou bem isto é exatamente o que acontecerá.
 * 
 * Exemplos ligeiramente mais complexos para expressões são as funções. Por exemplo, considere a seguinte função:
*/

function foo() {
    return 5;
}

/**
 * Assumindo que você está familiarizado com o conceito de funções (se não estiver, dê uma olhada no capítulo sobre functions), você pode assumir que digitar $c = foo() é essencialmente a mesma coisa que escrever $c = 5, e você está certo. Funções são expressões com o valor igual ao seu valor de retorno. Como foo() retorna 5, o valor da expressão 'foo()' é 5. Geralmente, as funções não retornam apenas um valor estático, mas computam algo. 
 * 
 * Claro, valores em PHP não tem que ser inteiros, e muito comumente eles não são. o PHP suporta quatro tipos de valores escalares: valores integer (inteiros), valores de ponto flutuante (float), valores string (caracteres) e valores boolean (booleano) (valores escalares são valores que você não pode partir em peças menores, diferentemente de matrizes, por exemplo). O PHP também suporta dois tipos compostos (não escalar): matrizes e objetos. Cada um desses valores podem ser definidos em uma variável ou retornados de uma função.
 * 
 * O PHP leva as expressões muito além, da mesma maneira que muitas outras linguagens fazem. O PHP é uma linguagem orientada a expressões, no sentido de que quase tudo são expressões. Considere o exemplo com o qual já lidamos, '$a = 5'. É fácil ver que há dois valores envolvidos aqui, o valor da constante inteira '5', e o valor de $a que está sendo atualizado para 5 também. Mas a verdade é que há um valor adicional envolvido aqui, e que é o próprio valor da atribuição. A própria atribuição é avaliada com o valor atribuído, neste caso 5. Na prática, significa que '$a = 5', independente do que faça, é uma expressão com o valor 5. Portanto, escrever algo como '$b = ($a = 5)' é como escrever '$a = 5; $b = 5;' (um ponto-e-vírgula marca o fim do comando). Como atribuições são analisadas da direita para a esquerda, você também pode escrever '$b = $a = 5'.
 * 
 * Outro bom exemplo de orientação de expressão é o pré e o pós-incremento e decremento. Usuários de PHP 2 e muitas outras linguagens podem estar familiarizados com a notação de variable++ e variable--. Este são operadores de incremento e decrimento. Em PHP, como em C, há dois tipos de incremento - pré-incremento e pós-incremento. Tanto o pré-incremento quanto o pós-incremento, essencialmente, incrementam as variáveis, e o efeito sobre a variável é idêntico. A diferença é com o valor da expressão de incremento. O pré-incremento, que é escrito '++$variable', é avaliado como o valor de incremento (o PHP incrementa a variável antes de ler seu valor, por isso o nome pré-incremento). O pós-incremento, que é escrito '$variable++' é avaliado como o valor original da variável, antes de ser incrementada (o PHP incrementa a variável depois de ler seu valor, por isso o nome 'pós-incremento').
 * 
 * Um tipo muito comum de expressões são expressões de comparação. Estas expressões avaliam para ser false ou true. O PHP suporta > (maior que), >= (maior ou igual a), == (igual), != (diferente), < (menor que) and <= (menor ou igual a). A linguagem também suporta um conjunto de operador de equivalencia estrita: === (igual a e do mesmo tipo) and !== (diferente de ou não do mesmo tipo). Estas expressões são mais comumente usada dentro de execução condicional como comandos if.
 * 
 * O último exemplo de expressões com que nós vamos lidar aqui são as expressões combinadas operador-atribuição. Você já sabe que se você quer incrementar $a de 1, você só precisa escrever '$a++' ou '++$a'. Mas e se você quiser somar mais que um a ele, por exemplo 3? Você poderia escrever '$a++' várias vezes, mas esta obviamente não é uma forma muito eficiente ou confortável. Uma prática muito mais comum é escrever '$a = $a + 3'. '$a + 3' é avaliada como o valor de $a mais 3, e é atribuído de volta a $a, que resulta em incrementar $a em 3. Em PHP, como em várias outras linguagens como o C você pode escrever isto de uma forma mais curta, que com o tempo se torna mais limpa e rápida de se entender. Somar 3 ao valor corrente de $a pode ser escrito '$a +=3'. Isto significa exatamente "pegue o valor de $a, some 3 a ele, e atribua-o de volta a $a." Além de ser mais curto e mais limpo, isto também resulta em execução mais rápida. O valor de '$a += 3', como o valor de uma atribuição regular, é o valor atribuído. Note que NÃO é 3, mas o valor combinado de $a mais 3 (este é o valor que é atribuído a $a). Qualquer operador de dois parâmetros pode ser usado neste modo operador-atribuição, por exemplo '$a -= 5' (subtrai 5 do valor de $a), '$b *= 7' (multiplica o valor de $b por 7), etc.
 * 
 * Há mais uma expressão que podem parecer estranha se você não a viu em outras linguagens, o operador condicional ternário:
*/

$primeira ? $segunda : $terceira

/**
 * Se o valor da primeira sub-expressão é verdadeiro (true, não-zero), então a segunda sub-expressão é avaliada, e este é o resultado da expressão condicional. Caso contrário, a terceira sub-expressão é avaliada e este é o valor.
*/



?>