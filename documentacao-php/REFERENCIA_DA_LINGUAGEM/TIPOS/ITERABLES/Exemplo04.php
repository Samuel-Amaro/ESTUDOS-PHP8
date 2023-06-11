<?php 

/**
 *  Funções declarando iteráveis ​​como um tipo de retorno também podem ser geradores .
 * 
 * Exemplo # 4 Exemplo de tipo de retorno do gerador iterável
*/

//função que retorna um tipo iterable
function gen() : iterable{
    yield 1;
    yield 2;
    yield 3;
}

?>