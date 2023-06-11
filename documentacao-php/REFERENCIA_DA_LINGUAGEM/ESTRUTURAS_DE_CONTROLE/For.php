<?php

/**
 * * for
 * 
 *  Os laços for são os mais complexo no PHP. Possui comportamento semelhante ao C. A sintaxe do laço for é:
*/

for(expr1; expre2; expr3)
    statement;

/**
 * A primeira expressão (expr1) é avaliada (executada), uma vez, incondicionalmente, no início do laço.
 * 
 * No começo de cada iteração a expr2 é avaliada. Se a avaliada como true, o laço continuará e as instruções aninhada serão executadas. Se avaliada como false, a execução do laço terminará.
 * 
 * No final de cada iteração, a expr3 é avaliada (executada).
 * 
 * Cada uma das expressões podem ser vazias ou conter múltiplas expressões separadas por vírgulas. Na expr2, todas as expressões separadas por vírgula são avaliadas mas o resultado é obtido da última parte. Se a expr2 estiver vazia significa que o laço deve ser executado indefinidamente (O PHP considera implicitamente como true, igual ao C). Isto não é inútil como se imagina, pois muitas vezes deseja-se interromper o laço utilizando a instrução break ao invés de usar a expressão verdade do for.
 * 
 * Analise os seguintes exemplos. Todos exibem números de 1 até 10:
*/

//exemplo 1

for($i = 1; $i <= 10; $i++) {
    echo $i;
}

//exemplo 2
for($i = 1; ; $i++) {
    if($i > 10) {
        break;
    }
}

//exemplo 3
$i = 1;
for(; ; ) {
    if($i > 10) {
        break;
    }
    echo $i;
    $i++;
}

for($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);

/**
 * É claro que o primeiro exemplo aparenta ser o mais simpático (ou talvez o quarto), mas pode-se achar que o uso de expressões vazias no laço for, seja vantajoso em algumas ocasiões. 
 * 
 * O PHP também suporta a sintaxe alternativa "dois pontos" para o laço for.
*/

for(expr1; expr2; expr3):
    stream;
    //...
endfor;

/**
 * É comum, para muitos usuários, iterar em arrays como no exemplo abaixo.
*/

/**
 *  Esta é uma array com alguns dados que devem ser modificadoswant to modify
 * 
 *  durante a execuçao do loop for.
*/

$pessoa = array(
                array('name' => 'Kalle', 'salt' => 856412),
                array('name' => 'Pierre', 'salt' => 215863)
);

for($i = 0; $i < count($pessoa); ++$i) {
    $pessoa[$i]['salt'] = mt_rand(000000, 999999);
}

/**
 * O código acima pode se tornar lento, pois o tamanho do array será calculado a cada iteração. Desde que o tamanho nunca mude, o laço pode ser facilmente otimizado usando uma variável intermediária para armazenar o tamanho ao invés de executar repetidamente o count(): 
*/

for($i = 0, $size = count($pessoa); $i < $size; ++$i) {
    $pessoa[$i]['salt'] = mt_rand(000000, 999999);
}
?>