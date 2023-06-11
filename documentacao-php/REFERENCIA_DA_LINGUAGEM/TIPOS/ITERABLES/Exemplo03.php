<?php 

/**
 *  Iterable também pode ser usado como um tipo de retorno para indicar que uma função retornará um valor iterável. Se o valor retornado não for uma matriz ou instância de Traversable , um TypeError será lançado.
 * 
 * exemplo #3 Exemplo de tipo de retorno iterável
 * 
*/

//uma função que retorna um tipo iterable
function bar() : iterable {
    return [1, 2, 3];
}
?>