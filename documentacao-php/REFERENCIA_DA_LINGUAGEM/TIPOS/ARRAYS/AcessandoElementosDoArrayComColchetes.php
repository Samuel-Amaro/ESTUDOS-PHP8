<?php

/**
 * * ACESSANDO ELEMENTOS DO ARRAY COM COLCHETES
 * 
 * Elementos do array podem ser acessados utilizando a sintaxe array[chave].
*/

//Exemplo #6 Acessando elementos do array

$array = array(
     "foo" => "bar",
     42 => 24,
     "multi" => array(
         "dimensional" => array(
             "array" => "foo"
         )
     )
);

var_dump($array["foo"]); //bar
var_dump($array[42]); //24
//logica de como esta a hierarquia
//array[.., ..., [[]]];
var_dump($array["multi"]["dimensional"]["array"]); //foo

/**
 * Nota: Tanto colchetes quanto chaves podem ser utilizados intercambiávelmente para acessar elementos de um array (por exemplo, $array[42] e $array{42} irão fazer a mesma coisa que o exemplo anterior).
 * 
 * A partir do PHP 5.4 é possível referenciar um elemento de um array como resultado de uma função ou método chamado diretamente. Antes, era possível somente através de uma variável temporária.
 * 
 * A partir do PHP 5.5 é possível referenciar elementos de um array literal.
*/

//Exemplo #7 Referenciando elemento de um array

function getArray() {
    return array(1, 2, 3);
}

//no PHP 5.4
$secondElement = getArray()[1];

//anteriormente
$tmp = getArray();
$secondElement = $tmp[1];

//OU
list(, $secondElement) = getArray();

/**
 * Nota: Tentativas de acesso a uma chave de array que não foi definida é o mesmo que acessar qualquer outra variável indefinida: uma mensagem de erro de nível E_NOTICE será emitida, e o resultado será null.
 * 
 * Nota: Referenciar um valor scalar de um array que não seja uma string gerará silenciosamente um null, isto é, sem emitir uma mensagem de erro.
*/
?>