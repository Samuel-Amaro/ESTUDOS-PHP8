<?php 

/**
 * * Exemplo #2 Exemplo de Callback utilizando uma Closure
 * 
 * 
*/

// Nossa closure(uma funçaõ anonima)
$double = function($a) {
    return $a * 2;
};

// Esta é a série de números
$numbers = range(1, 5);

// O uso da closure aqui para
// dobrar o valor de cada elemento de nossa
// série
$new_numbers = array_map($double, $numbers);

print implode(' ', $new_numbers);

?>