<?php

/**
 * * MULTIPLO TRAITS(CARACTERÍSTICAS MÚLTIPLAS)
 * 
 *  Vários TRAITS podem ser inseridos em uma classe, listando-os na use instrução, separados por vírgulas.
 * 
 * * EXEMPLO #4 USANDO MULTIPLOS TRAITS
 * 
*/

//declarando um trait que tem 1 metodos que podem ser utilizados em qualquer classe
trait Ola{
    //metodo publico que pode ser utilizado em qualquer classe
    public function digaOla() {
        echo 'Hello';
    } 
}

//declarando um trait chamado Mundo que tem 1 metodo que pode ser utilizado em qualquer classe
trait Mundo{
    //metodo publico que pode ser utilizado em qualquer classe
    public function digaMundo() {
        echo 'World';
    }
}

//declarando um class chamada MyHelloWorld
class MyHelloWorld{
    //a classe MyHelloWord utilizara traits, quando se utitliza mais de um trait pode ser a chamda por virgula, chamando o proximo
    use Ola, Mundo;
    //metodo publico da classe
    public function digaPontoExclamacao() {
        echo '!';
    }
}

//declarando uma instancia de objeto da classe MyHelloWorld
$o = new MyHelloWorld();
//chamando metodo que esta associado a classe MyHelloWorld, mas que foi declarado dentro da trait Ola, que esta sendo utilizada pela classe MyHelloWorld
$o->digaOla(); //'Hello'
//chamando metodo que esta associado a classe MyHelloWorld, mas que foi declarado dentro da trait Mundo, que esta sendo utilizada pela classe MyHelloWorld
$o->digaMundo(); //'World'
//chamando metodo que pertence a classe e foi declarado dentro dela
$o->digaPontoExclamacao(); //'!'
?>