<?php 

/**
 * * EXEMPLO #2 FUNÇÕES/CONSTANTES GLOBAIS FALLBACK DENTRO DE UM NAMESPACE
 * 
 *  
*/

//declara um espaço de nomes, para que classes, funções e constantes possam ter nomes reservados
namespace A\B\C;

//Erros fatais em tempo de execução. Isso indica erros que não podem ser recuperados, como um problema de alocação de memória.
//A execução do script foi interrompida.
const E_ERROR = 45;

function srtlen($str) {
    //chama a função global strlen(), que exsite no espaço global
    return \strlen($str) - 1;
} 

echo E_ERROR, "</br>"; //imprime "45"
echo INI_ALL, "</br>"; //imprime "7" - volta para INI_ALL global

echo strlen('hi'), "</br>"; //imprime "1"

if(is_array('hi')) {
    //imprime "não e array"
    echo "e array </br>";
}else{
    echo "não e array </br>";
}
?>