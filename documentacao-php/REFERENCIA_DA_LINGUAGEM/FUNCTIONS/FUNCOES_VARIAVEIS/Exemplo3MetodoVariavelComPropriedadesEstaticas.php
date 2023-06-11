<?php

/**
 * Quando chamando métodos estáticos, uma chamada de função tem preferência que uma propriedade estática.
 *
 * Exemplo #3 Método variávei com propriedades estáticas
*/

class Foo {
    static $variable = 'propriedade estática';
    static function Variable() {
        echo 'Metodo chamado';
    }
}

echo Foo::$variable; //isto imprime 'propriedade estática'. ele busca $variable no escopo da classe.
$variable = "Variable";

Foo::$variable(); //isto chama $foo->Variable(), lendo a $variable no escopo da chamada.

?>