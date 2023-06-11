<?php

/**
 * * FUNÇÕES VARIÁVEIS
 * 
 *  O PHP suporta o conceito de funções variáveis. Isto significa que se um nome de variável tem parênteses no final dela, o PHP procurará uma função com o mesmo nome, qualquer que seja a avaliação da variável, e tentará executá-la. Entre outras coisas, isto pode ser usado para implementar callbacks, tabelas de função e assim por diante.
 * 
 * Funções variáveis não funcionam com construtores de linguagem como echo, print, unset(), isset(), empty(), include, require e outras assim. Utilize uma função de wrapper para usar quaisquer um destes construtores como uma função variável.
 * 
 * Exemplo #1 Exemplo de funções variáveis
*/

function foo() {
    echo "Chamou foo() <br> \n";
}

function bar($arg = '') {
    echo "Chamou bar(); com argumento '$arg'.<br/> \n";
}

//essa é uma função wrapper para echo()
function echoit($string) {
    echo $string;
}

$func = 'foo';
$func(); //chama foo()

$func = 'bar';
$func('test'); //chamar bar()

$func = 'echoit';
$func('test'); //chama echoit()

/**
 * Um método de um objeto também pode ser chamado com a sintaxe de funções variáveis.
 * 
 *  Exemplo #2 Exemplo de chamada de um método variável
*/


?>