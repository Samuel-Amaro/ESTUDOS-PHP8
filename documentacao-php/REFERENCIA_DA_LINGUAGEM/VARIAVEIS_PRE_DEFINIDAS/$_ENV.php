<?php 

/**
 * * $_ENV
 * 
 *  $HTTP_ENV_VARS [obsoleta]
 * 
 * $_ENV -- $HTTP_ENV_VARS [obsoleta] — Environment variables
 * 
 * DESCRIÇÃO:
 * 
 * Um array associativo de variáveis passadas para o script atual via o método do ambiente.
 * 
 * Estas variáveis são importadas para o PHP do ambiente sob o qual o parser do PHP é executado. Muitas são providas pelo shell sob o qual o PHP é executado e diferentes sistemas são prováveis executar diferentes tipos de shells, uma lista definitiva é impossível. Veja a documentação de shellp para saber a lista de variáveis de ambiente definidas.
 * 
 * Outras variáveis de ambiente incluem variáveis CGI, elas aparecem desconsiderando se o PHP é executado como um módulo do servidor ou processador CGI.
 * 
 * $HTTP_ENV_VARS contém a mesma informação inicial, mas não é uma superglobal. (Note que $HTTP_ENV_VARS e $_ENV são variáveis diferentes e que o PHP manuseia-as diferentemente)
 * 
 * Exemplos
 * 
*/

echo 'My username is ' . $_ENV["USER"] . "!";

?>