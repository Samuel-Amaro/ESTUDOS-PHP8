<?php 

/**
 *  Solicite a entrada de um número e descubra se um número digitado é par ou ímpar. 
*/

$numero = 2;

if($numero > 1) {
    if($numero % 2 === 0) {
        echo "Número Digitado e Par.";
    }else{
        echo "Número Digitado e ímpar.";
    }
}else if($numero <= 0) {
    echo "Não e possivel saber se numero e par ou impar, digite um valor positivo";
}
?>