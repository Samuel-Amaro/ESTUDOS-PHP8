<?php 

/**
 * * PROPRIEDADES E MÉTODOS
 * 
 *  Propriedades e métodos de classe vivem em "namespaces" separados, de forma que é possível ter uma propriedade e método com mesmos nomes. A referência a propriedades e métodos tem a mesma notação, e a decisão de se uma propriedade será acessada ou uma chamada a um método feita, depende somente do contexto, ou seja, se está tentando acessar uma variável ou chamar um método.
 * 
 * * EXEMPLO #7 ACESSO A PROPRIEDADE VS CHAMAR UM MÉTODO
 * 
*/

//definindo uma classe chamada Foo
class Foo {
    //definindo uma propriedade da classe chamada bar
    public $bar = 'propriedade';
    //definindo um metodo da classe chamado bar
    public function bar() {
        return 'métod';
    }
}

//cria uma instancia de objeto da classe Foo
$obj = new Foo();
//$obj->bar -> acessa a propriedade da classe
//$obj->bar() -> acessa o metodo da classe
echo $obj->bar, PHP_EOL, $obj->bar(), PHP_EOL;


?>