<?php 

/**
 * * EXEMPLO #1 implode() example
 *  
*/

//strings a serem juntados no implode
$array = ['lastname', 'email', 'phone'];
//separador - oque vai separa as strings, uma da outra
$separator = ",";
var_dump(implode($separator, $array)); //"lastname,email,phone"

print("<br/>");

//String vazia ao usar uma array vazia:
$separator2 = 'hello';
$array2 = array(); 
var_dump(implode($separator, $array2)); //""

print("<br/>");

//O separador é opcional:
//não passando o paramentro do separador que e opcional
$array3 = ['a', 'b', 'c']; //"abc"
var_dump(implode($array3));
