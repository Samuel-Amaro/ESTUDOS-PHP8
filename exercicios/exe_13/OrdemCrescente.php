<?php 

/**
 *  Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente em relação aos seus valores. Exemplo, para A=5, B=4. Você deve imprimir na tela: "4 5".
*/

$valorA = 5;
$valorB = 4;
$ordenado = array();

if($valorA > $valorB) {
    $ordenado[0] = $valorB;
    $ordenado[1] = $valorA;
}else if($valorB > $valorA){
    $ordenado[0] = $valorA;
    $ordenado[1] = $valorB;
}else{
    //são iguais
    $ordenado[0] = $valorB;
    $ordenado[1] = $valorA;
}

foreach($ordenado as $item) {
    echo "$item ";
}

?>