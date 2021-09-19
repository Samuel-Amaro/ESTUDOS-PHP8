<?php 

/**
 *  Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de acordo com o número solicitado, ex:  Entrada = 4 Saída = 4 X 0 = 0...4 X 10 = 40.
*/

$input = 10;

if($input > 0) {
    for ($i = 0; $i <= 10; $i++) { 
        echo "$i * $input = " . $i * $input . "</br>";
    }
}else{
    echo "Tabuada Solicitada Fora do Intervalo! </br>";
}



?>