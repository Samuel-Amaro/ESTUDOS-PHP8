<?php 

/**
 * * EXEMPLO #3 IMPORTANDO  E NOMES DINÂMICOS 
*/

//importando classes com nomes reservado no namespace, e dando apelidos
use My\Full\Classname as Another, My\Full\NSname;

$obj = new Another; //instancia objeto da class My\Full\Classname

//variavel armazena o apelido do namespace reservado para classe
$a = 'Another';

//utilizando a interprestação dinamica do php
$obj = new $a; //instancia objeto da class Another

/**
 * Além disso, a importação afeta apenas nomes não qualificados e qualificados. Os nomes totalmente qualificados são absolutos e não são afetados pelas importações.
*/


?>