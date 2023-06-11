<?php 

/**
 * * EXEMPLO #2 EXEMPLOS DE RETORNO EXPLODE()
 *  
*/

/*
   Uma string que não contém o delimitador irá simplesmente
   retorna uma array de comprimento único da string original.
*/

//strings a serem usadas no explode
print("<h2>String completas</h2>");
$input1 = "hello";
print("<h3>$input1</h3>");
$input2 = "hello,there";
print("<h3>$input2</h3>");
$input3 = ',';
print("<h3>$input3</h3>");
print("<h2>Apos uso do explode</h2>");
//separa a string input1, usando o separador da virgula, mas a string não contem o separador, então retona um array com string original
var_dump(explode(',', $input1));
//contem o separador, então retorna as substrings da string original separa
print("<br/>");
var_dump(explode(',', $input2));
print("<br/>");
//contem somente o separator na string, devolve a string vazia, separada, sem o separator que nesse caso e a string e o separator ao mesmo tempo, retorna duas substring vazias, apos a separação
var_dump(explode(',', $input3));


?>