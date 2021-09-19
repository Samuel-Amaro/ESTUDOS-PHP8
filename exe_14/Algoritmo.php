<?php 

/**
 *  Faça um algoritmo em PHP onde verifica se o valor da variável A é maior ou menor que o valor da variável B. A mensagem a ser impressa deve ser “A maior que B” ou “A menor que B”.
*/

$variavelA = 150;
$variavelB = 150;

if($variavelA > $variavelB) {
    echo "A maior que B.</br>";
}else if($variavelA < $variavelB){
    echo "A menor que B.</br>";    
}else{
    echo "A é B são iguais.</br>";
}
?>