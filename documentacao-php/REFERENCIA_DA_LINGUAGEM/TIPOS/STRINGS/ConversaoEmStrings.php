<?php

/***
 * * CONVERSÃO EM STRINGS
 * 
 *  Um valor pode ser convertido em uma string utilizando o modificador (string) ou a função strval(). A conversão em string é automaticamente realizada no escopo de uma expressão onde uma string é necessária. Isto acontece no uso das funções echo ou print ou quando o valor de uma variável é comparado com uma string. 
 * 
 * O valor boolean true é convertido para a string "1". O boolean false é convertido para "" (uma string vazia). Isso permite converter nos dois sentidos entre os valores booleano e string.
 * 
 * Um integer ou um float é convertido para uma string representando o número textualmente (incluindo a parte do expoente nos floats). Números de ponto flutuante podem ser convertidos usando a notação exponencial (4.1E+6).
 * 
 * Arrays são sempre convertidos para uma string "Array"; por isso echo e print não podem, por si só, mostrar o conteúdo de um array. Para visualizar um único elemento, use uma construção como echo $arr['foo']
 * 
 * Para converter objetos em strings o método mágico __toString deve ser usado.
 * 
 * Resources são sempre convertidos para strings na estrutura "Resource id #1" onde 1 é o número único do resource atribuído pelo PHP em tempo de execução.
 * 
 * null é sempre convertido para uma string vazia.
 * 
 * Como declarado acima, converter diretamente um array, objeto ou recurso para uma string não fornece nenhuma informação útil sobre o valor, a não ser seu tipo. 
 * 
 * 
*/

?>