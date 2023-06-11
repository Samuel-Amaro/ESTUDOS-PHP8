<?php 

/**
 * * OPERADORES DE TIPO 
 * 
 *  Por fim, instanceof pode também ser usado para determinar se uma variável é um objeto instânciado de uma classe que implementa uma interface:
 * 
 * Exemplo #4 Usando instanceof para classe
*/

interface MyInterface {

}

class MyClass implements MyInterface {

}

$a = new MyClass;

//verifia se a variavel $a e uma instancia da classe MyClass
var_dump($a instanceof MyClass); //bool(true)

//verifica se a variavel $a e uma instancia de uma classe que implemente uma interface MyInterface
var_dump($a instanceof MyInterface); //bool(true)


?>