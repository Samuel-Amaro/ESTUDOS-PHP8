<?php

/**
 * *  Exemplo #2 Exemplo de chamada de um método variável
*/

class Foo{
    function MetodoVariavel() {
        $name = 'Bar';
        $this->$name(); //isto chama o método Bar()
    }
    function Bar() {
        echo "Bar foi chamada!";
    }
}

$foo = new Foo();
$funcname = "MetodoVariavel";
$foo->$funcname(); //isto chama $foo->MetodoVariavel()



?>