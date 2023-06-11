<?php 

/**
 * * MÉTODOS ESTÁTICOS
 * 
 *  Como métodos estáticos podem ser chamados sem uma instancia do objeto criada, a pseudo-variável $this não está disponível dentro de um método declarado como estático.
 * 
 * Cuidado No PHP 5, chamar métodos não estáticos estaticamente gerará um alerta de nível E_STRICT.
 * 
 * No PHP 7, chamar métodos não estáticos estaticamente foi depreciado, e gerará um alerta de nível E_DEPRECATED. O suporte a chamada de métodos não estáticos estaticamente pode ser removido no futuro.
*/

//definição da class Foo
class Foo{
    //definição de um metodo estatico que pode ser chamada sem ter que criar uma instancia da classe
    public static function sStaticMethod() {
        //...não pode usar o this dentro de metodo estatico, não e disponivel
    }
}

//Acessando o metodo Estatico por meio do operador de resolução de escopo, sem precisar instancia um objeto
Foo::aStaticMethod();

//variavel armazena nome da classe
$classname = 'Foo';
//acessando o metodo estatico por meio da variavel que armazena a copia do nome da classe, usando o operador de resolução de escopo, sem precisar instancia um objeto
$classname::aStaticMethod(); //A partir do PHP 5.3.0

?>