<?php

/**
 * * EXEMPLO #2 IMPORTANDO/ALIASING COM O OPERADOR USE, INSTRUÇÕES DE USO MÚLTIPLO COMBINADAS
 *  
*/

//importando namespaces e dando apelidos
use My\Full\Classname as Another, My\Full\NSname; 

$obj = new Another; //Instanciação de objeto da class My\Full\Classname

NSname\subns\func(); //chama a função My\Full\NSname\subns\func

/**
 * A importação é realizada em tempo de compilação e, portanto, não afeta a classe dinâmica, função ou nomes de constantes. 
*/

?>