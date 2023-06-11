<?php 

/**
 * 
 * É possível acessar um membro do objeto recém criado em uma expressão simples:
 * 
 * *  EXEMPLO #6 ACESSAR MEMBRO DO OBJETO RECÉM-CRIADO
 * 
 * 
*/

echo (new DateTime())->format('Y');

/**
 * Nota: Anteriormente ao PHP 7.1, os argumentos não são avaliados se não houver um construtor definido. 
*/

?>