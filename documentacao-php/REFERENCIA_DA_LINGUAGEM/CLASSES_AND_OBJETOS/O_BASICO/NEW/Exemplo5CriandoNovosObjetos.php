<?php 

/**
 * 
 * É possível usar algumas formas de criar instâncias de um objeto:
 * 
 * * EXEMPLO #5 CRIANDO NOVOS OBJETOS
 * 
 *  
*/

//define uma classe chamada test
class Test{
    //definindo um metodo estatico pertencente a class Test
    static public function getNew() {
        return new static;
    }
}

//define uma class chamada Child que herda propriedades e metodos de class Test
class Child extends Test { }

//cria uma obj1 que e uma instancia de class Test
$obj1 = new Test();
//cria uma obj2 baseado no tipo do obj1
$obj2 = new $obj1;
//se o $obj1 não for igual a $obj2 ou não forem do mesmo tipo
var_dump($obj1 !== $obj2);

$obj3 = Test::getNew();
//verifica se a variavel $obj3 e uma instancia de Class Test
var_dump($obj3 instanceof Test);

//verifica se a variavel $obj4 e uma instancia de Class Child
$obj4 = Child::getNew();
var_dump($obj4 instanceof Child);
?>