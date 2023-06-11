<?php 

/**
 * * EXEMPLO #3  Declaração de tipo de retorno básico
 * 
*/

//uma função que necessita de dois parametros obrigatorios de qualquer tipo, mas essa função retorna uma valor numerico do tipo float
function sum($a, $b): float{
    return $a + $b;
}

//Observe que um float será retornado.
//mostra informações sobre a variavel ou uma expressão passada
var_dump(sum(1, 2));

?>