<?php 

/**
 * * MÉTODOS E PROPRIEDADES NULLSAFE
 * 
 *  A partir do PHP 8.0.0, propriedades e métodos também podem ser acessados com o operador "nullsafe": ?->. O operador nullsafe funciona da mesma forma que os acessos de métodos e variáveis, exceto que se o objeto referenciado é null, então null será retornado ao invés de uma exceção ser lançada. Se o item null ser parte de uma cadeia de chamada, o resto da cadeira é ignorado.
 * 
 * O resultado é similar a encapsular cada acesso dentro de um teste is_null(), mas mais compacto.
 * 
 * EXEMPLO #17 OPERADOR NULLSAFE
 * 
 * 
*/

// A partir do PHP 8.0.0, esta linha:
$result = $repository?->getUser(5)?->name;

// É o equivalente ao seguinte código:
if (is_null($repository)) {
    $result = null;
} else {
    $user = $repository->getUser(5);
    if (is_null($user)) {
        $result = null;
    } else {
        $result = $user->name;
    }}


?>