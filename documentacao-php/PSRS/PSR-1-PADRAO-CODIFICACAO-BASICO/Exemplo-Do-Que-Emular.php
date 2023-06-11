<?php 

/**
 * O exemplo a seguir é de um arquivo que contém declarações sem efeitos colaterais; ou seja, um exemplo do que emular: 
*/

//declaração
function foo() {
    //corpo da função
}

//a declaração condicional * não * é um efeito colateral
//se a função não tiver sido declarada
if(!function_exists('bar')) {
    function bar() {
        //corpo da função
    }
}
