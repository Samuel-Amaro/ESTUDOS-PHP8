<?php

/**
 * * STRINGS
 *  
 * Uma string é uma série de caracteres, onde um caractere é o mesmo que um byte. Isso significa que o PHP possui suporte a um conjunto de apenas 256 caracteres, e, portanto, não possui suporte nativo a Unicode.
 * 
 * * SINTAXE
 * 
 * Uma string literal pode ser especificada de quatro formas diferentes.
 * 
 * aspas simples
 * aspas duplas
 * sintaxe heredoc
 * sintaxe nowdoc
 * 
 * * ASPAS SIMPLES
 * 
 * A maneira mais simples de se especificar uma string é delimitá-la entre aspas simples (o caractere ').
 * 
 * Para especificar um apóstrofo, escape-o com uma contrabarra (\). Para especificar uma contrabarra literal, dobre-a (\\). Todas as outras ocorrências da contrabarra serão tratadas como uma contrabarra literal: isso significa que outras sequências de escape que se esteja acostumado a utilizar, como \r ou \n, serão literalmente impressas em vez de ter qualquer significado especial.
 * 
 * Nota: Diferentemente das sintaxes com aspas duplas e heredoc, variáveis e sequências de escape para caracteres especiais não serão expandidas quando ocorrerem dentro de uma string delimitada por aspas simples.
*/

echo 'isto é uma string comun';

echo 'Você pode incluir novas linhas em strings,
dessa maneira que estará
tudo bem';

//imprime: Arnold disse uma vez: "Ii ll be back"
//escapa o apostrofo: \'
echo 'Arnold isse um vez: "I\'ll be back"';

//Imprime: Você tem certeza em apagar C:\*.*?
//representa uma barra: \\
echo 'Você tem certeza em apagar C:\\*.*?';

//Imprime: Você tem certeza em apagar C:\*.*?
echo 'Você tem certeza em apagar C:\*.*?';

//Imprime: Isto não será substituido: \n uma nova linha
echo 'Isto não será substituido: \n uma nova linha';

//Imprime: Variáveis $também não $expandem
echo 'Variáveis $também não $expandem';
?>