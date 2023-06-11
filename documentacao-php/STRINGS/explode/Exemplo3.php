<?php 

/** 
 * * EXEMPLO #3  limit exemplos de parâmetros
*/

//string a ser usada no explode
$str = 'one|two|three|four';

//limit positivo, quando se usa o parametro limit no explode, e controlado o numero de elementos substrings que são trazidos do array de resultado assim nesse caso o array tem que divir a $str em duas substrings, no caso o array com dois elementos
print_r(explode('|', $str, 2));

//limit negativo, Se o limit parâmetro for negativo, todos os componentes, exceto o último - limit são retornados. 
//a substring 'four' não e retornado por estar usando um limit negativo
print_r(explode('|', $str, -1));