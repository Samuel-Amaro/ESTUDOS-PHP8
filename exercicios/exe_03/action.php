<?php

/**
 * Faça um script que peça dois números e imprima a soma.
*/

$numero01 = $_POST['numero01'];
$numero02 = $_POST['numero02'];
$soma = NULL;


if($numero01 == 0 && $numero02 == 0) {
    echo "Infome numeros diferentes de 0";
}else{
    $soma = $numero01 + $numero02;
    echo "A soma de ${numero01} + ${numero02} = ${soma}";
}

?>