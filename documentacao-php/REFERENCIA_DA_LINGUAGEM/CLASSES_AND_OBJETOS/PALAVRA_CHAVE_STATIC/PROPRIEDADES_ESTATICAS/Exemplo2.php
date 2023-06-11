<?php 

/**
 * * PROPRIEDADES ESTÁTICAS
 * 
 *  Propriedades estáticas não podem ser acessadas através do operador ->.
 * 
 * Como qualquer outra variável estática do PHP, propriedades estáticas podem ser inicializadas, até o PHP 5.6, somente usando um valor literal ou constante; expressões não são permitidas. No PHP 5.6 e em versões superiores, as mesmas regras aplicadas a expressões const: algumas expressões limitadas são possíveis, se fornecidas serão avaliadas em tempo de compilação.
 * 
 * A partir do 5.3.0, é possível referenciar a classe usando uma variável. O valor da variável não pode ser uma palavra chave (por exemplo, self, parent e static).
 * 
 * * EXEMPLO #2 EXEMPLO DE PROPRIEDADE ESTÁTICA
 * 
 * 
*/

//definição de class FOO
class Foo{
    //definindo uma propriedade estatica
    public static $meu_estatico = 'foo';
    //definindo um metodo da class
    public function valorEstatico() {
        //o operador self referencia a propria classe, junto com o operador de resolução de escopo pode-se acessar a propriedade estatica
        return self::$meu_estatico;
    }
}

//definição da class Bar, que e uma subClasse da SuperClasse Foo, fazendo assim Bar herdar tudo de Foo, herança simples
class Bar extends Foo{
    //definindo um metodo da class
    public function fooEstatico() {
        //o operador parent, acessa a SuperClasse(Classe pai), junto com o operador de resolução de escopo pode-se acessar propriedades e metodos estaticos da classe 
        return parent::$meu_estatico;
    }
}

//Acessando a propriedade estatica da classe sem precisar instancia um objeto, somente utilizando  o operador de resolução de escopo
print Foo::$meu_estatico . "</br>";

//instancia um novo Objeto da classe Foo
$foo = new Foo();

//chama um metodo da class
print $foo->valorEstatico() . "</br>";

//não pode acessar uma propriedade estatica utilizando o operador ->
print $foo->$meu_estatico . "</br>"; //"Propriedade" Indefinida $meu_estatico

//acessando a propriedade estatica da class por meio de uma intancia de objeto da classe, utilizando um operador de resolução de escopo, porque não pode-se usar o operador -> para acessar propriedade estatica
print $foo::$meu_estatico . "</br>";

//variavel armazena uma copia do nome da classe
$classname = 'Foo';

//acessando a propriedade estatica usando a variavel e o operador de resolução de escopo
print $classname::$meu_estatico . "</br>"; //No PHP 5.3.0

//acessando a propriedade estatica por meio da classe Filha, utilizando o operador de resolução de escopo
print Bar::$meu_estatico . "</br>";

//instancia um novo objeto da class Bar
$bar = new Bar();

//chama um metodo  da classe Bar
print $bar->fooEstatico() . "</br>";

?>