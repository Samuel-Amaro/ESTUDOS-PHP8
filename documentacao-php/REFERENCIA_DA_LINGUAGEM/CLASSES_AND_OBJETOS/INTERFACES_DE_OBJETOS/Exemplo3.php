<?php 

/**
 * * EXEMPLO #3 INTERFACE COM HERANÇA MÚLTIPLA
 * 
 *  
*/

//declara uma interface chamada a
interface a {
    //assinatura do metodo declarado na interface a
    public function foo();
}

//declara uma interface chamada b
interface b{
    //assinatura do metodo declarado na interface b
    public function bar();
}

//declara uma interface chamada c, que vai ser uma Sub Interface das interfaces a, b, fazendo assim uma herança multipla, a inteface c, herda de duas interfaces, herda constantes e assinatuas de metodos da interfaces a,b.
interface c extends a, b{
    //assinatura do metodo declarado na interface c
    public function baz();
}



//Para implementar uma interface, o operador implements é utilizado. Todos os métodos na interface devem ser implementados na classe; não fazê-lo resultará em um erro fatal. 
//a classe chamada d, implementa a interface chamada c, sendo assim implementa os metodos da interface c
//definição da classe d
class d implements c {
    //implementa metodo da interface a, mas que e pai da interfa c
    public function foo() {

    }
    //implementa metodo da interface b, mas que e pai da interfa c
    public function bar() {

    }
    //implementa um metodo da interface c
    public function baz() {

    }
}

?>