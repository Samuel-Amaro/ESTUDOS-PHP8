<?php 
/**
 * * EXEMPLO #1 TRAIT EXAMPLE
 *  
*/

//declarando um trait que tem 2 metodos que podem ser utilizados em qualquer classe
trait ezcReflectionReturnInfo{
    //metodo que pode ser reutilizado em qualquer classe
    function getReturnType() {
        /*1*/
    }
    //metodo que pode ser reutilizado em qualquer classe
    function getReturnDescription() {
        /*2*/
    }
}

//sub classe ezcReflectionMethod herda tudo da super classe ReflectionMethod
class ezcReflectionMethod extends ReflectionMethod {
    //usa o trait declarado, dentro da sub classe ezcReflectionMethod
    use ezcReflectionReturnInfo;
}

//sub classe ezcReflectionFunction herda tudo da super classe ezcReflectionReturnInfo
class ezcReflectionFunction extends ReflectionFunction{
    //usa o trait declarado, dentro da sub classe ezcReflectioFunction
    use ezcReflectionReturnInfo;
    /*..*/
}

?>