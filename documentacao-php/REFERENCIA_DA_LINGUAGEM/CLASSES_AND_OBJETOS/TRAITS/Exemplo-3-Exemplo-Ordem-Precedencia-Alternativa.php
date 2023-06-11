<?php 

/**
 * * EXEMPLO #3 EXEMPLO DE PRECEDENCIA DE ORDEM ALTERNATIVA 
*/

//declarando um trait que tem 1 metodos que podem ser utilizados em qualquer classe
trait HelloWorld{
    //metodo que pode ser utilizado em qualquer classe
    public function sayHello() {
        echo 'Hello World!';
    }
}

//declarando um class chamda TheWorldIsNotEnough
class TheWorldIsNotEnough{
    //classe TheWorldIsNotEnough, utilizara o trait HelloWorld e o metodo declarado dentro do trait
    use HelloWorld;
    //metodo da classe TheWorldIsNotEnough, que possui mesmo nome do metodo declarado dentro da trait, mas que vai ser substituido por esse metodo declarado aqui dentro da classe
    public function sayHello()
    {
        echo 'Hello Universe!';
    }
}

//cria um nova instancia de objeto da classe TheWorldIsNotEnough
$o = new TheWorldIsNotEnough();
//chama o metodo sayHello() declarado dentro da class TheWorldIsNotEnough
$o->sayHello(); //'Hello Universe!'

?>