<?php

/**
 * * VALIDAR UM INTEIRO
 * 
 *  O exemplo a seguir usa a filter_var()função para verificar se a variável $ int é um inteiro. Se $ int for um inteiro, a saída do código abaixo será: "Integer is valid". Se $ int não for um inteiro, a saída será: "Integer não é válido":
 * 
 * Dica: filter_var () e problema com 0
 * 
 * No exemplo acima, se $ int foi definido como 0, a função acima retornará "Número inteiro inválido". Para resolver esse problema, use o código abaixo:
*/

$int = 0;

//FILTER_VALIDATE_INT: Valida o valor como inteiro, opcionalmente de um dado intervalo.

if(!filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo "Inteiro é válido </br>";
}else{
    echo "O número " . $int  ." inteiro não é válido </br>";
}
?>