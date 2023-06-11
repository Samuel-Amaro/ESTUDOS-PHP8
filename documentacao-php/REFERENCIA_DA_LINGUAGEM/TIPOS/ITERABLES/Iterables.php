<?php 

/**
 * * ITERABLES
 * 
 *  Iterable é um pseudo-tipo introduzido no PHP 7.1. Ele aceita qualquer array ou objeto que implemente a interface Traversable . Ambos os tipos são iteráveis ​​usando foreach e podem ser usados ​​com rendimento de dentro de um gerador .
 * 
 * * USANDO ITERABLES
 * 
 * Iterable pode ser usado como um tipo de parâmetro para indicar que uma função requer um conjunto de valores, mas não se preocupa com a forma do valor definido, pois será usado com foreach . Se um valor não for uma matriz(array) ou instância de Traversable , um TypeError será lançado.
 * 
 * Exemplo #1 Iterable parameter type example
 * Exemplo de tipo de parâmetro iterável
*/

function foo(iterable $iterable) {
    foreach($iterable as $value) {
        //...
    }
}




?>