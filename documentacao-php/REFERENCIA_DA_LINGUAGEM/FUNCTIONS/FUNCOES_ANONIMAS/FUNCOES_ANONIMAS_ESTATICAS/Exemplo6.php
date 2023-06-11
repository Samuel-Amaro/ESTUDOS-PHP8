<?php

/**
 * * FUNÇÕES ANÔNIMAS ESTÁTICAS
 * 
 * Funções anônimas podem ser declaradas estaticamente. Evita que a classe corrente seja automaticamente vinculada a ela. Objetos também podem não ser vinculadas a ela em tempo de execução.
 * 
 * Exemplo #6 Tentando utilizar o $this de dentro de uma função anônima estática
*/

class Foo
{
    function __construct()
    {
        $func = static function() {
            var_dump($this);
        };
        $func();
    }
};
new Foo();

?>

?>