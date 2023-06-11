<?php 

/**
 * * OPERADORES DE STRING
 * 
 *  Há dois operadores de string. O primeiro é o operador de concatenação ('.'), que retorna a concatenação dos seus argumentos direito e esquerdo. O segundo é o operador de atribuição de concatenação ('.='), que acrescenta o argumento do lado direito no argumento do lado esquerdo.
*/

$a = "Olá";
$b = $a . "mundo!"; //agora $b contém "Olá mundo!";

$a = "Olá";
$a .= "mundo!"; //agora $a contém "Ola Mundo!"

?>