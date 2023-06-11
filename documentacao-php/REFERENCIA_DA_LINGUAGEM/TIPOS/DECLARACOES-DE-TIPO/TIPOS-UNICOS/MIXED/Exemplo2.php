<?php

/**
 * * EXEMPLO #2 Declaração de tipo de interface básica
 * 
*/

//declarando interface I
interface I{
    //assinatura de metodo
    public function f();
}

//declarando a class C que implementa a interface I
class C implements I {
    //implementando o metodo da interface
    public function f() {

    }
}

//declarando class E que não implementa a interface I
class E{

}

//uma função que necessita de um paramentro obrigatorio que seja do tipo da interface I
function f(I $i) {
    //mostra o nome  do tipo do objeto ou da classe
    echo get_class($i) . "</br>";
}


f(new C); //class C implement I
f(new E); //class E não implementa I, gera erro

?>