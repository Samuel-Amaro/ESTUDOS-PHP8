<?php 

/**
 * * OPERADORES DE TIPO
 * 
 *  instanceof(intanciade) é usado para determinar se um variável do PHP é uma objeto instânciado de uma certa classe:
 * 
 * Exemplo #1 Usando instanceof com classes
 * 
 * 
*/

class MyClass {

}

class NotMyClass{

}

$a = new MyClass;

//a variavel $a e instancia da classe MyClass
var_dump($a instanceof MyClass); //bool (true)

//a variavel $a e instancia da classe NotMyClass
var_dump($a instanceof NotMyClass); //bool (false)

/**
 * instanceof pode também ser usado para determinar se uma variável é um objeto instânciado de uma classe que herda de uma classe pai: 
 * 
 * Exemplo #2 Usando instanceof com herança
*/

class ParentClass {

}

class MyClass2 extends ParentClass{

}

$a = new MyClass2;

//a variavel $a e instancia da classe MyClass
var_dump($a instanceof MyClass2); //bool (true)

//a variavel $a e uma instancia da classe MyClass que tem a classe ParentClass como pai(ou super classe)
var_dump($a instanceof ParentClass); //bool(true)

/**
 * Para verificar se um objeto não é uma instância de uma classe, o operador lógico not pode ser usado. 
*/

?>