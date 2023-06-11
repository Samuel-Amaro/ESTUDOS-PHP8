<?php

/**
 * * Fazendo argumentos serem passados por referência
 * 
 * Por padrão, argumentos de função são passados por valor (de forma que se você mudar o valor do parâmetro dentro da função, ele não é alterado fora da função). Para permitir que uma função modifique os seus argumentos, eles devem ser passados por referência.
 * 
 * Para ter um argumento para uma função sempre passado por referência, adicione antes dele um "e comercial" (&) ao nome do argumento na definição da função:
*/

function add_soma_extra(&$string) {
    //concatena um texto a mais
    $string .= ' e alguma coisa mais.';
}

$str = 'Isto é uma string,';
add_some_extra($str);
echo $str; //imprime 'Isto é uma string, e alguma coisa mais.

/**
 * É um erro passar um argumento por valor onde é esperado a passagem por referência.
*/

?>