<?php

/**
 * *  Exemplo #2 Exemplo de como definir uma função anônima para uma variável
 * 
*/

$greet = function($nome) {
    printf("Hello %s \r\n", $name);
}

$greet('World');
$greet('PHP');

/**
 * Closures também podem herdar variáveis do escopo pai. Essas variáveis precisam ser referenciadas utilizando a instrução use. A partir do PHP 7.1, essas variáveis não devem incluir superglobals, $this, ou variáveis com o mesmo nome como um parâmetro.
 * 
 *  
*/
?>