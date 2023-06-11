<?php

/**
 * * ACESSO E MODIFICAÇÃO DA STRING POR CARACTERE
 * 
 *  É possível acessar e modificar caracteres dentro de strings especificando a posição, baseada em zero, do caractere desejado na string usando colchetes, parecido com arrays, por exemplo $str[42]. Imagine uma string como um array de caracteres. As funções substr() e substr_replace(), podem ser utilizadas quando se deseja extrair ou substituir mais que 1 caractere.
 * 
 * Nota: A partir do PHP 7.1.0, posições negativas para strings são suportadas. Estas especificam a posição do final da string.
 * 
 * Nota: Strings também podem ser acessadas usando colchetes, como em $str{42}, com o mesmo propósito.
 * 
 * Nota: A partir do PHP 7.1.0, aplicar um operador de índice vazio em uma string lança um erro fatal Antes, a string vazia era convertida em um array.
*/

//Exemplo #12 Alguns exemplos com strings

//Pega o primeiro caractere de uma string
$str = 'This is a test.';
$first = $str[0];

//Pega o terceiro caractere de uma string
$third = $str[2];

//Obtenha o último caractere de uma string.
$str = 'This is still a test';
$last = $str[strlen($str) - 1];

//Modifica o último caractere de uma string
$str = 'Look at the sea';
$str[strlen($str) - 1] = 'e';

/**
 * A partir do PHP 5.4 o deslocamento de strings devem ser inteiros ou strings equivalentes a inteiros, caso contrário um erro do tipo warning será disparado. Anteriormente um deslocamento como "foo" era silenciosamente convertido em 0. 
 * 
 * Exemplo #13 Diferenças entre o PHP 5.3 e PHP 5.4
*/

$str = 'abc';

//var_dump() : string
//Despeja informações sobre uma variável

var_dump($str['1']);

//Determine se uma variável é declarada e é diferente de NULL
//isset (mixed $ var [, mixed $ ...]): bool

var_dump(isset($str['1']));

var_dump($str['1.0']);
var_dump(isset($str['1.0']));

var_dump($str['x']);
var_dump(isset($str['x']));

var_dump($str['1x']);
var_dump(isset($str['1x']));

/**
 * Nota: Acessar variáveis de outros tipos (excluindo-se arrays ou objetos que implementem certas interfaces) usando [] ou {} silenciosamente retornará null.
 * 
 *  Nota: O PHP 5.5 adicionou o suporte ao acesso de caracteres dentro de strings literais utilizando [] or {}.
 * 
 * 
*/
?>