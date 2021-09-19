<?php 

/**
 * Crie um algoritmo que solicite um número, e faça o cálculo fatorial do mesmo, exiba o resultado na tela. Ex: Entrada = 3 Processamento: (3 * 2) * 1 Saída: 6
*/

$input = 3;

function fatorial($numero) {
    $fato = ($numero * ($numero - 1)) * 1;
    return $fato;
}

echo "Fatorial de $input é " . fatorial($input) . "</br>";
?>