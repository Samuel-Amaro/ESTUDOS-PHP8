<?php 

/**
 * * $_COOKIE
 * 
 *  $HTTP_COOKIE_VARS [obsoleta]
 * 
 * $_COOKIE -- $HTTP_COOKIE_VARS [obsoleta] — HTTP Cookies
 * 
 * DESCRIÇÃO: 
 * 
 * Um array associativo de variáveis passadas para o atual script via HTTP Cookies.
 * 
 * $HTTP_COOKIE_VARS contém o mesma informação inicial, mas não é uma superglobal. (Note que $HTTP_COOKIE_VARS e $_COOKIE são variáveis diferentes e que o PHP manuseia-as diferentemente)
 * 
 * EXEMPLOS:
 * 
 * EXEMPLO #1
*/

echo 'Hello ' . htmlspecialchars($_COOKIE["name"]) . "!";

/**
 * Assumindo que o "nome" do cookie tenha sido definido antes
 */

?>