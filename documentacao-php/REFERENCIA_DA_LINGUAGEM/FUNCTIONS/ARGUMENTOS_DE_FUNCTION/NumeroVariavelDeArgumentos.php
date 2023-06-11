<?php

/**
 * * Número variável de argumentos 
 * 
 * O PHP suporta argumentos em quantidade variável em funções definidas pelo usuário, utilizando o token ....
 * 
 * Lista de argumentos que contém o token ... token para indicam que a função aceita uma quantidade variável de argumentos. Os argumentos serão passados na variável como um array. Por exemplo:
 * 
 * Exemplo #9 Utilizando ... para acessar argumentos variáveis
*/

function sum(...$number) {
    $acc = 0;
    foreach($number as $n) {
        $acc += $n;
    }
    return $acc;
}

echo sum(1, 2, 3, 4);

/**
 * Você também pode utilizar ... quando chamando funções para transformar uma variável array, Traversable ou literal em uma lista de argumentos. 
*/

//Exemplo #10 Utilizando ... para fornecer argumentos

function add($a, $b) {
    return $a + $b;
}

echo add(..[1,2])."\n";

$a = [1, 2];
echo add(...$a);

/**
 * Você pode especificar argumentos posicionais antes do indicador. .... Nesse caso comente os argumentos finais, que não pareiam com um argumento posicional, serão adicionados ao array gerado por .... 
 * 
 * É também possível adicionar um type hint antes do indicador .... Se presente então todos os argumentos capturados por ... deverão ser objetos da classe informada.
 * 
 * Exemplo #11 Argumentos variáveis com type hint
*/

function total_intervalos($unidade, DateInterval ...$intervalos) {
    $tempo = 0;
    foreach($intervalos as $inter) {
        $time += $inter->$unidade;
    }
    return $tempo;
}

$a = new DateInterval('P1D');
$b = new DateInterval('P2D');
echo total_intervalos('d', $a, $b).'dias';

//Isso falhará, pois null não é um objeto DateInterval.
echo total_intervalos('d', null);

?>