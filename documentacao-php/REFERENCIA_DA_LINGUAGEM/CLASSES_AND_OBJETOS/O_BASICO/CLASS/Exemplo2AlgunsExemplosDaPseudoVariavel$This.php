<?php 

/**
 * * EXEMPLO #2 ALGUNS EXEMPLOS DA PSEUDO VARIAVEL $THIS 
 * 
 * Chamar um método não estático de maneira estática lança um Error. Anteriormente ao PHP 8.0.0, isto iria gerar um aviso de chamada obsoleta, e $this estaria indefinido.
 * 
 *A pseudo-variável $this está disponível quando um método é chamado a partir de um contexto de um objeto. $this é o valor do objeto chamado.
*/

//define uma classe chamada A
class A {
    //define um metodo para a classe
    function foo() {
        //isset — Informa se a variável foi iniciada
        //mixed(misturado) - O valor pode ser qualquer valor.
        //isset(mixed $var, mixed $var = ?, $... = ?): bool
        //Retorna true se var existe; false caso contrário
        if(isset($this)) {
            echo '$this está definida (';
            //get_class([ object $object ]): string
            //Retorna o nome da classe de um objeto
            echo get_class($this);
            echo ")\n";
        }else{
            echo "\$this não está definida.\n";
        }
    }
}

//define uma classe chamda B
class B {
    //define um metodo para a classe
    function bar() {
        //lança um erro por ser um metodo não estatico, mas e chamado como um estatico
        A::foo();
    }
}

//this e o objeto a
$a = new A();
$a->foo();

//lança um erro por ser um metodo não estatico, mas e chamado como um estatico
A::foo();

//this e o objeto b
$b = new B();
$b->bar();

//lança um erro por ser um metodo não estatico, mas e chamado como um estatico
B::bar();

?>