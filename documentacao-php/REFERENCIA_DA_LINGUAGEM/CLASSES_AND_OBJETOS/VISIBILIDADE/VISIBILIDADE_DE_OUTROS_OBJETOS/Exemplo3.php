<?php 

/**
 * * VISIBILIDADE DE OUTROS OBJETOS
 * 
 *  Objetos do mesmo tipo terão acesso a outros mementos privados e protegidos mesmo que não sejam da mesma instância. Isso acontece por que os detalhes específicos de implementação já são conhecidos dentro destes objetos.
 * 
 * EXEMPLO #3 ACESSANDO MENBROS PRIVADOS ENTRE OBJETOS DO MESMO TIPO
 * 
*/

# definição da classe Test
class Test{
    //propriedade da classe, propriedade privada somente a propria classe acessa
    private $foo;

    //define uma função construtora publica que possui um paramentro obrigatorio que tem que ser passado ao tentar instancia um objeto
    public function __construct($foo) {
        $this->foo = $foo;
    }

    //um metodo da classe privado, somente a propria classe pode acessar
    private function bar() {
        echo 'Acessou o método privado. </br>';
    }

    //um metodo publico da classe, que possui um paramentro que e do tipo da propria classe, isso e uma outra instancia da classe, ou uma variavel do tipo da classe
    public function baz(Test $other) {
        //Pode-se alterar a propriedade privada:
        $other->foo = 'Hello';
        //mostra informações sobre a propriedade foo
        var_dump($other->foo);

        //Pode-se chamar método privado:
        $other->bar();
    }
}

# intancia um novo objeto do tipo da classe Test passando o parametro obrigatorio na instanciação
$test = new Test('test');

# chama o metodo da classe passando o paramentro obrigatorio do metodo que e um objeto do tipo da class Test que e do mesmo tipo que o do objeto
$test->baz(new Test('other'));


?>