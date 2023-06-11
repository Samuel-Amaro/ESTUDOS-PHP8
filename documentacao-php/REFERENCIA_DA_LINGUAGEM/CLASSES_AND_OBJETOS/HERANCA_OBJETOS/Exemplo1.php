<?php 

/**
 * * EXEMPLO #1 EXEMPLO DE HERANÇA
 * 
 *  
*/

//definição da classe Foo
class Foo{
    //metodo da classe, metodo com visibilidade publica, pode ser acessado de qualquer lugar
    public function printItem($string) {
        echo 'Foo: ' . $string . '</br>';
    }

    //metodo da classe, metodo com visibilidade publica, pode ser acessado de qualquer lugar
    public function printPHP() {
        echo 'PHP is great. ' . '</br>';
    }
}

//definição da classe Bar, esta classe e(uma sub classe, ou classe Filha), da super Classe ou Classe Base, ou classe Pai chamda Foo definida acima, a classe Base vai herdar metodos e propriedade publicas e protegidas, os metodos privados não são acessesiveis a classe Filha nem propriedades.
class Bar extends Foo{
    //metodo da classe, metodo com visibilidade publica, pode ser acessado de qualquer lugar
    //sendo reescrito, mas mantendo a mesma assiantura do metodo definido na super classe, sem modificar assinatura
    public function printItem($string) {
        echo 'Bar: ' . $string . '</br>';
    }
}

# instancia um novo objeto da class Foo
$foo = new Foo();
# instancia um novo objeto da class Bar
$bar = new Bar();
# acessando metodos da classe Foo
$foo->printItem('baz'); //Output: 'Foo: baz'
$foo->printPHP(); //Output: 'PHP is great'
# acessando metodos da classe Bar
$bar->printItem('baz'); //Output: 'Bar: baz'
$bar->printPHP(); //Output 'Php is great'


?>