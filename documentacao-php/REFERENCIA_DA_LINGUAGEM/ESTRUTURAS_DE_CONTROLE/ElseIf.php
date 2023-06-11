<?php 

/**
 * elseif, como o nome sugere, é uma combinação do if e else. Como o else, estende um if para executar instruções diferentes no caso da expressão if original ser avaliada como false. Entretanto, diferentemente do else, executará uma expressão alternativa somente se a expressão condicional do elseif for avaliada como true. Por exemplo, o código a seguir exibirá a is bigger than b, a equal to b ou a is smaller than b:
*/

$a = -8;
$b = -8;

if($a > $b) {
    echo "a e maior que b";
}elseif($a == $b) {
    echo "a e igual a b";
}else{
    echo "a e diferente de b";
}

/**
 * Pode haver vários elseifs dentro da mesma declaração if. A primeira expressão elseif (se houver) que retornar true será executada. No PHP, pode-se escrever 'else if' (em duas palavras), e o comportamento será idêntico ao do 'elseif' (em uma única palavra). O significado sintático é um pouco diferente (se você está familiarizado com C, o comportamento é o mesmo), mas, no fundo, ambos terão exatamente o mesmo comportamento.
 * 
 * O elseif só é executado se o if precedente ou qualquer elseif for avaliado como false, e o elseif corrente for avaliado como true.
*/
?>