<?php 

//declarando uma namespace com hierarquia, esse e um novo namespace, diferente do namespace do script1, o namespace tem que ser declarado no topo do arquivo antes de quaquer codigo, exceto declare
namespace Foo\Bar;

//inclui o script
include 'File1.php';

//declarando uma constante
const FOO = 2;
//definição de uma função
function foo() {}
//declaração de uma classe
class Foo{
    //criando um metodo estatico relacionado ao escopo dessa classe
    static function staticMethod() {}
}

/*Nome não qualificado, porque estou usando dentro do namespace em que os codigos foram declarados, isso e assume que o namespace atual, estamos dentro dele, estamos no atual NAMESPACE DECLARADO no inicio desse script*/
foo(); //resolve a função Foo\Bar\foo
Foo::staticMethod(); //resolve para a classe Foo\Bar\Foo, método staticmethod
echo FOO . "</br>"; //resolve para constante Foo\Bar\FOO, mostra valor 2 

/*Nomes Qualificados, estamos no namespace atual, que e Foo/Bar, isso e estamos uma hierarquia acima do subnamesce do script file1, para acessar tem que chamar a hierarquia relativa, assumindo que estamos no namespace Foo/Bar, caminho relativo de hierarquia de namespaces*/
subnamespace\foo(); //resolve para função Foo\Bar\subnamespace\foo
subnamespace\foo::staticMethod(); //resolve para a classe Foo\Bar\subnamespace\foo, metodo staticMethod
echo subnamespace\FOO . "</br>"; //resolve para constante Foo\Bar\subnamespace\FOO, mostrar valor 1

/*Nomes totalmente qualificados, isso e caminhos de hierarquia absolutos de namespaces*/
\Foo\Bar\foo(); //resolve para função Foo\Bar\foo
\Foo\Bar\Foo::staticMethod(); //resolve para class Foo\Bar\foo, metodo staticMethod
echo \Foo\Bar\FOO . "</br>"; //resolve para constante Foo\Bar\FOO, mostra o valor 2 

/**
 *  Observe que para acessar qualquer classe, função ou constante global, um nome totalmente qualificado pode ser usado, como \ strlen () ou \ Exception ou \INI_ALL.
*/

echo \strlen("SAMUEL") . "</br>";

?>