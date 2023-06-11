<?php

/**
 * * WHILE
 * 
 *  Laços while são os mais simples tipos de laços do PHP. Possui comportamento semelhante ao C. O formato básico de uma declaração while é:
*/

while(exp)
    statement;

/**
 * O propósito da declaração while é simples. Ele dirá ao PHP para executar as declarações aninhadas repetidamente, enquanto a expressão do while forem avaliadas como true. O valor da expressão é checado a cada vez que o laço é iniciado, então, mesmo seu valor mude durante a a execução das declarações aninhadas, a execução não será interrompida até o final da iteração ( cada vez que o PHP executa as declarações dentro do laço é uma iteração). Entretanto, se a expressão do while for avaliada como false desde o início, as declarações aninhadas não serão executadas nenhuma vez.
 * 
 * Similar a declaração if, pode-se agrupar múltiplas declarações no mesmo laço while delimitando o grupo de declarações por chaves, ou utilizando a sintaxe alternativa:
*/

while(expr):
    statement;
    //...
endwhile;

/**
 * Os exemplos a seguir são idênticos, e ambos imprimem os números de 1 a 10.
*/

//exemplo 1

$i = 1;
while($i <= 10) {
    echo $i++;
}

//exemplo 2

$i = 1;
while($i <= 10):
    echo $i;
    $i++;
endwhile;

?>