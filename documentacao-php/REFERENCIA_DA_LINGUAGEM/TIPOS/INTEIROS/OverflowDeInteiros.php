<?php

/**
 * * OVERFLOW DE INTEIROS
 * 
 * Se o PHP encontrar um número além dos limites do tipo inteiro, ele será interpretado como um ponto flutuante. Assim, uma operação que resulte em um número além dos limites do tipo inteiro, retornará um ponto flutuante.
*/

//estouro de inteiros de 32-bit

$large_number = 2147483647;
var_dump($large_number);   // int(2147483647)

$large_number = 2147483648;
var_dump($large_number);   // float(2147483648)

$million = 1000000;
$large_number =  50000 * $million;
var_dump($large_number); // float(50000000000)

 //estouro de inteiros de 64-bit

$large_number = 9223372036854775807;
var_dump($large_number); // int(9223372036854775807)

$large_number = 9223372036854775808;
var_dump($large_number); //float(9.2233720368548E+18)

$million = 1000000;
$large_number =  50000000000000 * $million;
var_dump($large_number); // float(5.0E+19)

//Não há um operador de divisão que resulta em um inteiro no PHP. 1/2 retorna o ponto flutuante 0.5. O valor pode ser convertido para inteiro para sempre truncar o número, ou usar a função round() que provê um fino controle sobre o arredondamento.

var_dump(25/7);         // float(3.5714285714286)
var_dump((int) (25/7)); // int(3)
var_dump(round(25/7));  // float(4)

/**
 * Nota: A partir do PHP 7.0.0, a função intdiv() está disponível para uma divisão inteira. 
*/
?>