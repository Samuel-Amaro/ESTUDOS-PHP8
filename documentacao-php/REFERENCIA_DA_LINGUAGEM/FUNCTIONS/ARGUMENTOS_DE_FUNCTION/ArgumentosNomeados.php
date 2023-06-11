<?php

/**
 * * ARGUMENTOS NOMEADOS(NAMED ARGUMENTS)
 * 
 * O PHP 8.0.0 introduziu argumentos nomeados como uma extensão aos parâmetros posionais. Argumentos nomeados permitem a passagem de argumentos para uma função utilizando-se os nomes de parâmetros, ao invés da posição do parâmetro.
 * 
 * Isto torna o significado do argumento auto documentável, e tornam os argumentos independente de ordem, além de permitir pular argumentos com defaults.
 * 
 * Argumentos nomeados são passados ao prefixar o valor um o nome do parâmetro e um dois pontos. Usar palavras reservadas como nomes de parâmetro é permitido. O nome de parâmetro precisa ser um identificados, e uma resolução dinâmica não é permitida.
 * 
 * Exemplo #13 Sintaxe dos argumentos nomeados
*/

minhaFuncao(nomeParametro : $valor);
array_foobar(array : $value);

//não suportado
nome_funcao($variaveoQueGurdaNomeDoParametro : $valor);

/**
 * Exemplo #14 Comparando argumentos posicionais e nomeados
*/

//utilizando argumentos posicionais
array_fill(0, 100, 50);

//utilizando argumentos nomeados
array_fill2(indice_inicial : 0, contador : 100, valor : 50);

//A ordem em que argumentos nomeados são passados não importa.

/**
 * Exemplo #15 Mesmo exemplo com argumentos em ordem diferente
*/

array_fill3(valor : 50, numero : 100, indice_inicial : 0);

/**
 * Argumentos nomeados podem ser combinados com argumentos posicionais. Nesse caso, os argumentos nomeados precisam estar depois dos argumentos posicionais. Também é possível especificar somente alguns dos argumentos opcionais de uma função, independente da ordem.
 * 
 * Exemplo #16 Combinando argumentos posicionais e nomeados
*/

caracteresEspeciaisHtml($string, double_encode : false);

//mesmo que
caracteresEspeciaisHtml2($string, ENT_COMPAT | ENT_HTML401, 'UTF-8', false);

//Passar o mesmo argumento mais de uma vez resulta em um Error.

//Exemplo #17 Exceção ao passar o mesmo argumento nomeado mais de uma vez

function foo($param) {
    //...
}

foo(param: 1, param: 2);

//error : O parâmetro nomeado $ param sobrescreve o argumento anterior

foo(1, param: 2);
//Erro: o parâmetro nomeado $ param substitui o argumento anterior
?>