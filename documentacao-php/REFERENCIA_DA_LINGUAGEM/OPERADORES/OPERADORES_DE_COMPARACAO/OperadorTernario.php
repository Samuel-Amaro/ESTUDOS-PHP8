<?php 

/**
 * * OPERADOR TERNÁRIO
 * 
 *  Outro operador condicional é o operador "?:" (ou ternário).
 * 
 * Exemplo #3 Atribuindo um valor padrão
*/

//Exemplo de uso para: operador ternário
//Determine se uma variável está vazia
//empty(misturado $ var): bool
$action = (empty($_POST['action'])) ? 'default' : $_POST['action'];

//O acima é idêntico a esta instrução if / else
//se variavel vazia
if(empty($_POST['action'])) {
    $action = 'default';
}else{
    $action = $_POST['action'];
}

/**
 * A expressão (expr1) ? (expr2) : (expr3) é avaliada para expr2 se expr1 é avaliada como true, ou expr3 se expr1 é avaliada como false. Desde o PHP 5.3 é possível deixar vazia a parte central do operador ternário. A expressão expr1 ?: expr3 retorna expr1 se expr1 verdade true e expr3 do contrário. 
*/
?>