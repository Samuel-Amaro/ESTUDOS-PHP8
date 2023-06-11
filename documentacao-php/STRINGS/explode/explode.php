<?php 

/**
 * * EXPLODE(explodir)
 * 
 *  explode — Divide uma string em strings
 * 
 * * DESCRIÇÃO
 
    explode(string $separator, string $string, int $limit = PHP_INT_MAX): array

 * 
 * Retorna uma array de strings, cada uma das quais é uma substring de string formada pela divisão em limites formados pela string separator.
 * 
 * * PARÂMETROS
 * 
 * separator(separador): A string de limite.
 * 
 * string: a string de entrada
 * 
 
    limit: Se limit for definido e positivo, o array retornado conterá no máximo limit elementos com o último elemento contendo o resto string.
    
    Se o limit parâmetro for negativo, todos os componentes, exceto o último - limit são retornados. 
    
    Se o limit parâmetro for zero, ele será tratado como 1.

 * 
 * Nota : Antes do PHP 8.0, implode () aceitava seus parâmetros em qualquer ordem. explode () nunca suportou isso: você deve garantir que o separator argumento venha antes do string argumento.
 * 
 * * VALORES RETORNADOS: 
 * 
 * Retorna uma array de strings criada pela divisão do string parâmetro nos limites formados por separator.
 * 
 * Se separator for uma string vazia (""), explode () lança um ValueError . Se separator contiver um valor que não está contido em string e um negativo limit for usado, um array vazio será retornado; caso contrário, um array contendo string será retornado. Se os separator valores aparecerem no início ou no final de string, esses valores serão adicionados como um valor de array vazio na primeira ou última posição do array retornado, respectivamente.
 * 
 * * NOTAS
 * 
 * Nota: esta função é segura para binários.
*/


?>