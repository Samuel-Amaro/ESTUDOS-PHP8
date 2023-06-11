<?php 

/**
 * * EXEMPLO #1 IMPORTANDO/ALIASING COM O OPERADOR USE 
*/

//declarando um espaço de nomes reservado, para funções, classes, constantes
namespace foo;

//importando um nome reservado de classe de um namespace, e criando uma apelido para esse namespace
use My\Full\ClassName as Another;

//isto é o mesmo que usar My\Full\NSname as NSname, usando e importando esse novo namespace
use My\Full\NSname;

//importando uma classe global
use ArrayObject;

//importando uma função
use function My\Full\functionName as func;

//importando uma constante
use const My\Full\CONSTANT;

$obj = new namespace\Another; //instanciação de objeto da class foo\Another

$obj = new Another; //instanciação de objeto da class My\Full\ClassName

NSname\subns\func(); //chama a função My\Full\NSname\subns\func

//instanciação objeto de class ArrayObject
//sem o "use ArrayObject" nós instanciaríamos um objeto da classe foo\ArrayObject
$a = new ArrayObject(array(1));

//mesmo nome de função mas em nomespaces diferentes, usando espaços de nomes reservados diferentes mas com nomes de funções iguais
func(); //chama função My\Full\functionName

echo CONSTANT; //ecoa o valor de My\Full\CONSTANT

/**
 * Observe que, para nomes de namespace (nomes de namespace totalmente qualificados contendo separador de namespace, Foo\Bar como oposto a nomes globais que não, como FooBar), a barra invertida inicial é desnecessária e não recomendada, pois os nomes de importação devem ser totalmente qualificados e não são processados em relação ao namespace atual. 
 * O PHP adicionalmente suporta um atalho de conveniência para colocar várias instruções de uso na mesma linha 
*/

?>