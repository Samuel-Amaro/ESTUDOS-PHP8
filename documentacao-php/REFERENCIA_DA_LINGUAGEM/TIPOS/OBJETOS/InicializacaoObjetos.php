<?php 

/**
 * * OBJETOS
 * 
 * * INICIALIZAÇÃO DE OBJETOS
 * 
 *  Para criar um novo objeto, utilize a instrução new para instanciar uma classe:
*/

class foo{
    function do_foo() {
        echo "Doing foo.";
    }
}

//intancia um novo objeto da classe foo
$bar = new foo;
//chama metodo da classe
$bar->do_foo();

?>