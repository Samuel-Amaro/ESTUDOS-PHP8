<?php

/**
 * * break
 * 
 *  break finaliza a execução da estrutura for, foreach, while, do-while ou switch atual.
 * 
 * break aceita um argumento numérico opcional que diz quantas estruturas aninhadas deverá interromper. O valor padrão é 1, somente a estrutura imediata é interrompida.
*/

$arr = array('one', 'two', 'three', 'four', 'stop', 'five');

foreach($arr as $valor) {
    if($valor == 'stop') {
        break; /* Você também pode escrever 'break 1;' aqui. */
    }
    echo "$valor<br/>";
}



?>