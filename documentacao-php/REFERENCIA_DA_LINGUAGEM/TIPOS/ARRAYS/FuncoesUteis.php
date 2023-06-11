<?php

/**
 * * FUNÇÕES ÚTEIS
 * 
 *  Há uma série de funções úteis para trabalhar com arrays
 * 
 * Nota: A função unset() permite apagar chaves de um array. Esteja avisado que o array não será reindexado. Se um comportamento como "remover e deslocar" é o desejado, o array poderá ser reindexado utilizando a função array_values().
*/

$a = array(1 => 'um', 2 => 'dois', 3 => 'três');
//remove o item com a chave 2
unset($a[2]);
/*
 * irá produzir um array que pode ser definido como
  
 $a = array(1 => 'um', 3 => 'três');

 e NÃO

 $a = array(1 => 'um', 2 => 'três');
*/

$b = array_values($a);
//agora $b é o array(1 => 'um', 2 => 'três');

/**
 * A estrutura de controle foreach existe especificamente para lidar com arrays. Ele provê uma maneira fácil de percorrer um array.
*/
?>