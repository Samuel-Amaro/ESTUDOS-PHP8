<?php 

/**
 * * VISIBILIDADE DE MÉTODOS
 * 
 *  Métodos de classe podem ser definidos como público, privado ou protegido. Métodos sem qualquer declaração explícita serão definidos como público.
 * 
 * EXEMPLO #2 DECLARAÇÃO DE MÉTODO
 * 
*/

# definição da classe MinhaClasse
class MinhaClasse{
    //Declara um construtor público, 
    //definindo um metodo construtor publico
    //Ao instancia o objeto da classe ele e chamado
    public function __construct(){

    }

    //Declara um método da classe public(podem ser acessados de qualquer lugar)
    public function meuPublico() {
        print "Chamou public meuPublic() </br>";
    }

    //Declara um método protected(só podem ser acessados na classe declarante e suas classes herdeiras)
    protected function meuProtegido() {
        print "Chamou protected meuProtegido() </br>";
    }

    //Declara um método private(só podem ser acessados na classe que define o metodo privado.)
    private function meuPrivado() {
        print "Chamou private meuPrivado() </br>";
    }

    //Essse metodo é public por padrão, mesmo não tendo sua visibilidade definida explicitamente ele e publico
    function foo() {
        $this->meuPublico();
        $this->meuProtegido();
        $this->meuPrivado();
    }
}

# instancia um objeto da classe MinhaClasse, como o construtor não tem paramentros obrigatorios pode-se omitir o parenteses
$minhaClasse = new MinhaClasse;
//acessando os metodos definidos na classe testando a visibilidade
$minhaClasse->meuPublico(); //Funciona
//$minhaClasse->meuProtegido(); //Erro Fatal
//$minhaClasse->meuPrivado(); //Erro Fatal
$minhaClasse->foo(); //Public, Protected e Private Funcionam

# definição da classe MinhaClasse2, onde MinhaClasse2 e uma sub classe, ou uma classe filha da super Classe MinhaClasse(ou classe Pai), herdando metodos e propriedades definidas
class MinhaClasse2 extends MinhaClasse{
    //Esse é public
    //Essse metodo é public por padrão, mesmo não tendo sua visibilidade definida explicitamente ele e publico
    function Foo2() {
        $this->meuPublico();
        $this->meuProtegido();
        //$this->meuPrivado(); //Erro Fatal, so pode ser acessado na classe que define o metodo como privado
    }
}

# instancia um objeto da classe MinhaClasse2, como o construtor não esta definido pode omitir os parenteses
$minhaClasse2 = new MinhaClasse2;
$minhaClasse2->meuPublico(); //Funciona
//$minhaClasse2->Foo2(); //Public e protected funcionam, Private não


//definição da classe Bar
class Bar{
    //define um metodo da classe como publico, todos tem acesso
    public function test() {
        //chama os metodos 
        $this->testPrivate();
        $this->testPublic();
    }

    //metodo da classe definido como publico todos tem acesso de qualquer lugar
    public function testPublic() {
        echo "Bar::testPublic </br>";
    }

    //metodo da classe definido como private, somente classe que declarou tem acesso
    private function testPrivate() {
        echo "Bar::testPrivate </br>";
    }
}

//definição da classe Foo(uma sub Classe ou classe filha), da super classe chamada Bar que e pai desta classe sendo definida, onde vai herdar metodos e propriedades publicas e protegidas
class Foo extends Bar{
    //Rescrevendo o metodo public testPublic, para fazer a tarefa de acordo com a classe que deseja
    //sem modificar a assinatura do metodo mantendo compatibilidade com o metodo da super classe
    public function testPublic() {
        echo "Foo::testPublic </br>";
    }

    //Rescrevendo o metodo privado, que não pode ser acessado por classes filhas, so pode ser acessado pela classe declaradora, isso não vai surtir efeito, oque vai valer e o metodo declarado na super classe
    //sem modificar a assinatura do metodo mantendo compatibilidade com o metodo da super classe
    private function testPrivate() {
        echo "Foo::testPrivate </br>";
    }
}

# istancia um objeto da classe Foo
$myFoo = new Foo();
# acessa o metodo da classe
$myFoo->test(); //Bar::testPrivate //Foo::testPublic

?>