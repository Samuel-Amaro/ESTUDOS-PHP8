<?php 

/**
 * * EXEMPLO #2 ORDEM DE PRECEDÊNCIA
 * 
 *  Um método herdado de uma classe base é substituído pelo método inserido em MyHelloWorld a partir da Característica SayWorld. O comportamento é o mesmo para métodos definidos na classe MyHelloWorld. A ordem de precedência é que os métodos da classe atual sobrescrevem os métodos Trait, que por sua vez sobrescrevem os métodos da classe base.
*/

//declara uma classe chamada base
class Base{
    //metodo da classe
    public function sayHello() {
        echo 'Hello';
    }
}

//declarando um trait que tem 1 metodos que podem ser utilizados em qualquer classe
trait sayWorld{
    //metodo que pode ser usado em qualquer classe
    public function sayHello() {
        //chama o metodo sayHello(), da classe Base, estaticamente
        parent::sayHello(); //'Hello' 
        echo 'World'; //'World'
    }
}

//declarando um SubClasse chamada MyHelloWord que possui uma super classe Base como pai
class MyHelloWorld extends Base{
    //MyHelloWord utilizara o trait, fazendo assim o metodo sayHello() ser substituido pelo metodo sayHello() declarado dentro da trait 
    use sayWorld;
}

//criando uma nova instancia de objeto da classe MyHelloWord
$o = new MyHelloWorld();
//chamando um metodo da subclasse, que existe na subclasse e que existe no trait também, mas o metodo chamado pertence a trait, o metodo sayHello da class Base foi substituido por esse
$o->sayHello(); //Hello World

?>