<?php 

/**
 * * EXEMPLO #1 DECLARAÇÃO DE TIPO DE CLASSE BÁSICA
 *  
*/

//declaração de uma classe com o nome C
class C{

}

//declaração da classe D que herda de C
class D extends C{

}

//Isso não estende C.
class E {}

//uma função que necessita de um paramentro obrigatorio que seja do tipo da class C
function f(C $c) {
    //retorna o nome de uma classe e do objeto passado
    echo get_class($c) . "</br>";
}

f(new C); //class type C
f(new D); //class type C
f(new E); //class type E, mas gera erro porque não e do tipo C

?>