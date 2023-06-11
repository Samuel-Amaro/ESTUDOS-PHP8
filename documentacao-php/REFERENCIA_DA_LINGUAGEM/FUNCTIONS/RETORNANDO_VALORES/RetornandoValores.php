<?php

/**
 * * RETORNANDO VALORES
 * 
 *  Valores podem ser retornados utilizando a instrução opcional return. Qualquer tipo pode ser retornado, incluindo arrays e objetos. Isto faz com que as função termine sua execução imediatamente e passa o controle de volta para a linha de onde ela foi chamada.
 * 
 * Se return for omitido então o valor null será retornado.
 * 
 * * Sintaxe do return
 * 
 * Exemplo #1 O uso de return
*/

function quadrado($num) {
    return $num * $num;
}

echo quadrado(4); //imprime '16'

/**
 * Você não pode retornar múltiplos valores a partir de uma função, mas resultados similares podem ser obtidos retornando um array.
 * 
 * Exemplo #2 Retornando um array para devolver vários valores
*/

function numeros_pequenos() {
    return array(0, 1, 2);
}

//chama a função que retorna o array, e logo apos o return cria um novo array com os valores retornados

list($zero, $um, $dois) = numeros_pequenos();

/**
 * Para retornar uma referência de uma função, use o operador de referência & em ambas a declaração da função e quando definindo o valor para a variável. 
*/

function &retorna_referencia() {
    return $alguma_referencia;
}

$nova_referencia =& retorna_referencia(); 

?>