<?php

/**
 * * Exemplo #7 Tentando vincular um objeto a uma função anônima estática 
*/

$func = static function() {
    // corpo da função
};

$func = $func->bindTo(new StdClass);
$func();

?>