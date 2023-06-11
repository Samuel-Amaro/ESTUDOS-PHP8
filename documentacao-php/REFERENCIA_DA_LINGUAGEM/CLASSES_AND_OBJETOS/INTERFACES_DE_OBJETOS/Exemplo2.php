<?php 

/**
 * * EXEMPLO #2 INTERFACES ESTENDÍVEIS
 * 
 *  
*/

//declara uma interface
interface a{
    //metodo da interface, declara a assinatura do metodo, que tem que ser implementado
    public function foo();
}

//declara a interface b que e uma subInterface De a, a interface b herda os metodos e constantes declarados na interface b, herança entre as interfaces
interface b extends a{
    public function baz(Baz $baz);
}

//Isto irá funcionar
//definição da classe c, que implementa a interface b,
//a classe c implementa os metodos da interface b, seguindo as assinaturas declaradas.
class c implements b{
    //implementando o metodo da interface, seguindo a assinatura original declarada
    public function foo() {

    }
    //implementando o metodo da interface, seguindo a assinatura original declarada
    public function baz(Baz $baz) {

    }
}

//Isto não ira funcionar e resultará em um erro fatal
//definição da classe d, classe d implementa  a interface b
class d implements b {
    //implementa o metodo da interface b
    public function foo() {

    }
    //implementa o metodo da interface b, so que modificando a assinatura do metodo, isso não e permitido
    public function baz(Foo $foo) {

    }
}
?>