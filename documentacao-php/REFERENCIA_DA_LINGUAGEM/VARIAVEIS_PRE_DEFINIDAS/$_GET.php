<?php 

/**
 * * $_GET
 *  
 * $HTTP_GET_VARS [obsoleta]
 * 
 * $_GET -- $HTTP_GET_VARS [obsoleta] — HTTP GET variáveis
 * 
 * DESCRIÇÃO
 * 
 * Um array associativo de variáveis passadas para o script atual via o método HTTP GET.
 * 
 * $HTTP_GET_VARS contém a mesma informação inicial, mas não é uma superglobal. (Note que $HTTP_GET_VARS e $_GET são variáveis diferentes e que o PHP manuseia-as diferentemente)
 * 
 * EXEMPLOS
*/

//usar essa url https://localhost/DOCUMENTACAO_PHP/REFERENCIA_DA_LINGUAGEM/VARIAVEIS_PRE_DEFINIDAS/$_GET.php?name=Samuel

echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!';

?>