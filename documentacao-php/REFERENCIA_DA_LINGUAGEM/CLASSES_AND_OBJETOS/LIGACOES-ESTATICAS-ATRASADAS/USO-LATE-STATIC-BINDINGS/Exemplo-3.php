<?php 

/**
 * * EXEMPLO #3 USO DO STATIC:: EM UM CONTEXTO NÃO ESTÁTICO
 * 
 *  
*/

//definição da class A
class A{
    //metodo privado da class, somente classe declarante acessa o metodo, dentro do seu proprio escopo
    private function foo() {
        echo "Sucesso! </br>";
    }
    //metodo publico da class
    public function test() {
        //chama função em contexto não-estatico
        $this->foo();
        //chamando função em contexto estatico, função tem que ser estatica, ou propriedade estatica que funciona com esse operador
        //por o metodo ser privado a unica forma das herdeiras de chamar este metodo e dessa forma, mas somente dentro do escopo de A
        static::foo();
    }
}

//definição da classe B, que e subclass da super Class A, assim b herdara propriedades e metodos de A, inclusive seu escopo
class B extends A {
    /*
     oo() será copiado para B, assim seu escopo ainda será A e
    * e a chamada funcionará 
    */
}

//definição da classe C, que e subclass de A e que herda tudo de A
class C extends A {
    //rescrevendo o metodo definido em A,
    //sem mudar a assinatura, mas podendo mudar implementação
    private function foo() {
        /*método original foi substituído, escopo agora é C*/
    }
}

# instancia um objeto da class
$b = new B();
# chamando metodo da instancia
$b->test();
# instancia um objeto da class
$c = new C();
# chamando metodo da instancia
$c->test(); //falha porque o escopo do metodo foi definido para c, e o metodo como privado não tem acesso para ele, somente a SuperClasse ou classe Base que definiu consegue acesar o metodo


?>