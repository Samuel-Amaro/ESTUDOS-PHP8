<?php 

/**
 * Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".
*/

$numeroDigitado = 15;

if($numeroDigitado > 0) {
    echo "Valor Positivo </br>";
}else if($numeroDigitado < 0){
    echo "Valor Negativo </br>";
}else{
    echo "Valor Igual a Zero. </br>";
}

?>