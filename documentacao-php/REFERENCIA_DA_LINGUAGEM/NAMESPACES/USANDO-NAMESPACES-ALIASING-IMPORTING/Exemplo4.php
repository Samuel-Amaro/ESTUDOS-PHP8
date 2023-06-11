<?php 

/**
 * * EXEMPLO #4 IMPORTANDO E NOMES TOTALMENTE QUALIFICADOS
 * 
 *  
*/

//importa os namespaces e seta apelidos
use My\Full\Classname as Another, My\Full\NSname; 

$obj = new Another; //instancia objeto da class My\Full\Classname
$obj = new \Another; //instancia objeto da class Another
$obj = new Another\thing; //instancia objeto da class My\Full\Classname\thing
$obj = new \Another\thing; //instancia objetos da class Another\thing

?>