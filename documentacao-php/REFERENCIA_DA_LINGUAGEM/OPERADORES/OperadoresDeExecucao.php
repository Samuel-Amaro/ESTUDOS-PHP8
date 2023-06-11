<?php 

/**
 * * OPERADORES DE EXECUÇÃO
 * 
 *  O PHP suporta um operador de execução: acentos graves (``). Note que não são aspas simples! O PHP tentará executar o conteúdo dentro dos acentos graves como um comando do shell; a saída será retornada (isto é, ela não será simplesmente mostrada na tela; ela pode ser atribuída a uma variável). A utilização do operador acento grave é idêntica a da função shell_exec().
*/

$output = `ls -al`;
echo "<pre>$output</pre>";

/**
 * Nota: Ao contrário de outras linguagens, acentos graves não tem sentido especial dentro de strings delimitadas por aspas. 
*/

?>