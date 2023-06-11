<?php 

/**
 * Isto significa que chamar diretamente uma função anônima atribuída a uma propriedade não é possível. Em vez disso, por exemplo, a propriedade deve primeiro ser atribuída a uma variável. É possível chamar uma propriedade diretamente a colocando entre parênteses.
 * 
 * * EXEMPLO #8 CHAMANDO UMA FUNÇÃO ANÔNIMA ARMAZENADA EM UMA PROPRIEDADE
 * 
 *   
*/

//definindo uma classe chamada Foo
class Foo{
    //uma propriedade(atributo chamada)
    public $bar;
    //metodo da classe
    public function __construct() {
        //a propriedade bar tem como valor uma função anonima, sem nome, especificado, a função e acessada por meio de bar colocando parenteses
        $this->bar = function() {
            return 42;
        };
    }
}

//cria uma instancia de objeto da class Foo
$obj = new Foo();

//acessa a propriedade bar, que ao cria uma istancia da class Foo, chama o construtor, e o contrutor chamara  propriedade bar, com uma função anonima definda nela
echo ($obj->bar)(), PHP_EOL;


?>