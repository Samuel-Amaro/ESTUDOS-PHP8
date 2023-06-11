<?php

/**
 * * ASPAS DUPLAS
 * 
 *  Se a string for delimitada entre aspas duplas ("), o PHP interpretará a seguinte sequência de escape como caracteres especiais:
 
    - \n	fim de linha (LF ou 0x0A (10) em ASCII)

    - \r	retorno de carro (CR ou 0x0D (13) em ASCII)

    - \t	TAB horizontal (HT ou 0x09 (9) em ASCII)

    - \v	TAB vertical (VT ou 0x0B (11) em ASCII) (a partir do PHP 5.2.5)

    - \e	escape (ESC or 0x1B (27) em ASCII) (a partir do PHP 5.4.4)

    - \f	form feed (FF ou 0x0C (12) em ASCII) (a partir do PHP 5.2.5)

    - \\	contrabarra ou barra invertida

    - \$	sinal de cifrão

    - \"	aspas duplas

    - \[0-7]{1,3}	a sequência de caracteres correspondente a expressão regular é um caractere em notação octal, que silenciosamente é extravasada para caber em um byte (e.g. "\400" === "\000")

    - \x[0-9A-Fa-f]{1,2}	a sequência de caracteres correspondente a expressão regular é um caractere em notação hexadecimal

    - \u{[0-9A-Fa-f]+}	a sequência de caracteres correspondente a expressão regular é um código Unicode, que será impresso como uma string que representa um código UTF-8 (adicionado no PHP 7.0.0)

 * 
 * Como com as strings entre aspas simples, escapar qualquer outro caractere resultará em uma contrabarra sendo impressa. Em versões anteriores ao PHP 5.1.1, a contrabarra em \{$var} não era impressa.
 * 
 * O recurso mais importante de strings delimitadas por aspas duplas é o fato de que nomes de variáveis serão expandidos.
*/

?>