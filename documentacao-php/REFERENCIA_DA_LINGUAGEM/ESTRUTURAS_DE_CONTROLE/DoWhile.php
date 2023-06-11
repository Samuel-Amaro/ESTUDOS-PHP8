<?php

/**
 * * do while
 * 
 *  Os laços do-while é muito similar aos laços while, com exceção que a expressão de avaliação é verificada ao final de cada iteração em vez de no começo. A maior diferença para o laço while é que a primeira iteração do laço do-while sempre é executada (a expressão de avaliação é executada somente no final da iteração), considerando que no laço while não é necessariamente executada (a expressão de avaliação é executada no começo de cada iteração, se avaliada como false logo no começo, a execução do laço será abortada imediatamente).
 * 
 * Só há uma sintaxe para o laço do-while:
*/

$i = 0;
do{
    echo $i;
}while($i > 0);

/**
 * O laço acima será executado somente uma vez, pois após a primeira iteração, quando a expressão de avaliação for executada, resultará em false ($i não é maior que 0) e a execução do laço será encerrada.
 * 
 *  Usuário avançados de C devem estar familiarizados com um uso diferente do laço do-while, que permite parar a execução no meio do bloco de códigos, encapsulando-os em um do-while (0), e usando o break . O código a seguir demonstra isso:
*/

do{
    if($i < 5) {
        echo "eu não sou grande o suficiente";
        break;
    }
    $i *= $factor;
    if($i < $minimun_limit) {
        break;
    }
    echo "estou bem";
}while(0);

/**
 * Não se preocupe se não entender isso neste momento. Pode-se criar scripts simples ou mesmo poderosos sem usar esse 'recurso'. 
*/
?>