<?php 

/**
 * * EXEMPLO #4 RETORNANDO UM OBJETO
 *  
*/

//declarando uma class chamada C
class C{

}

//criando uma função que retorna uma instancia de objeto do tipo C ou retorna a propria classe do Tipo C
function getC(): C{
    return new C;
}

//mostra informações sobre a variavel ou uma expressão passada
var_dump(getC());


?>