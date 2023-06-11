<?php

/**
 * Os parâmetros declarados como iteráveis ​​podem usar null ou uma matriz(array) como valor padrão.
 * 
 *  Exemplo # 2 Exemplo de valor padrão de parâmetro iterável
*/

//um parametro da função e um tipo iterable que possui um valor padrão definido, um array vazio
function foo(iterable $iterable = []) {
    //...
}



?>