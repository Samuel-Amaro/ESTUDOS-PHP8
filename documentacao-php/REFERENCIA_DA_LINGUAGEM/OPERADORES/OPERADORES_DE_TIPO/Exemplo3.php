<?php 

/**
 * * OPERADORES DE TIPO
 * 
 *  Para verificar se um objeto não é uma instância de uma classe, o operador lógico not pode ser usado.
*/

class MyClass{

}

$a = new MyClass;

// verifica se $a e uma instancia da classe stdClass isso retorna bool(false) e o operador de negação inverte o resultado da expressão para bool(true)
var_dump(!($a instanceof stdClass)); //bool(true)


?>