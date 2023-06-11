<?php

/**
 * * OPERADORES DE TIPO
 * 
 *  Embora instanceof é usualmente usado com um nome de classe literal, ele pode também ser usado com outro objeto ou uma variável string:
 * 
 * Exemplo #5 Usando instanceof com outras variáveis
*/

interface MyInterface {

}

class MyClass implements MyInterface {

}

$a = new MyClass;
$b = new MyClass;
$c = 'MyClass';
$d = 'NotMyClass';

//$b é  umn objeto da classe MyClass
//verifica se a variavel $a e uma instancia do mesmo tipo da variavel $b, que as duas são instancias da classe MyClass
var_dump($a instanceof $b);  //bool(true)

//$c é uma string 'MyClass'
//verifica se $a e um instancia de MyClass, sendo que o $c não e uma instancia de MyClass
var_dump($a instanceof $c); //bool(true) 
//$d é uma string 'NotMyClass'
//verifica se $a e um instancia de MyClass, sendo que o $d não e uma instancia de MyClass
var_dump($a instanceof $d); //bool(false)

?>