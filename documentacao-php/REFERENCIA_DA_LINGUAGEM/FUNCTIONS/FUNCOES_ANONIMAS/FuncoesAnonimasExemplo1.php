<?php

/**
 * * FUNÇÕES ANÔNIMAS
 * 
 * Funções anônimas, também conhecidas como closures, permitem a criação de funções que não tem o nome especificado. Elas são mais úteis como o valor de parâmetros callback, mas podem ter vários outros usos.
 * 
 * Funções anônimas são implementadas utilizando a classe Closure
 * 
 * Exemplo #1 Exemplo de função anônima
 * 
*/

echo preg_substituir_retorno_de_chamada('~([a-z])~',  function($match) {
    return strtoupper($match[1]);
}, 'hello-word');

//saida helloWorld

/**
 * Closures também podem ser utilizadas como valores de variáveis; o PHP automaticamente converte expressões assim em instâncias da classe interna Closure. Definindo um closure a uma variável usa a mesma sintaxe que qualquer outra definição, incluindo o ponto-e-vírgula:
*/

?>