<?php

/**
 * Muitas vezes deseja-se executar uma instrução se uma certa condição for válida, e uma instrução diferente se a mesma condição não for válida. Para isso que o else serve. O else estende a instrução if para executar outras caso a expressão no if retornar false. Por exemplo, o código a seguir exibirá a is greater than b se $a for maior que $b, e a is NOT greater than b caso contrário:
*/

$a = -1;
$b = 3;

if($a > $b) {
    echo "a e maior que b";
}else{
    echo "a não e maior que b";
}

/**
 * A instrução else só é executada se a expressão de avaliação do if for avaliada como false, e se tiver qualquer expressão elseif - somente se também retornarem false (veja elseif). 
*/
?>