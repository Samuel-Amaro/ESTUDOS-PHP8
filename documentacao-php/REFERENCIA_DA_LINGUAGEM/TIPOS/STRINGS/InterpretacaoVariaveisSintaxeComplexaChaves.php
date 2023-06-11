<?php

/**
 * Para qualquer coisa mais complexa, utilize a sintaxe complexa.
 * 
 * * SINTAXE COMPLEXA(CHAVES)
 * 
 *  Isto não é chamado sintaxe complexa porque a sintaxe é complexa, mas sim porque permite a utilização de expressões complexas.
 * 
 * Qualquer variável escalar, elemento de um array ou propriedade de um objeto com uma representação de uma string pode ser incluída com essa sintaxe. Simplesmente escreva a expressão da mesma forma como apareceria fora da string e então coloque-o entre { e }. Já que que { não pode escapado, esta sintaxe será somente reconhecida quando o $ seguir, imediatamente, o {. Use {\$ para obter um literal {$. Alguns exemplos que tornam isto claro:
 * 
*/

//Mostrar todos os erros
error_reporting(E_ALL);

$great = 'fantastic';

//Não funciona, resultados: Isso é {fantástico}
echo "This is { $great}";


//Funciona, produz: Isso é fantástico
echo "This is {$great}";

//Trabalho
echo "This square is {$square->width}00 centimeters broad";

//Funciona, as chaves entre aspas só funcionam usando a sintaxe de chaves
echo "This works: {$arr['key']}";

//trabalho
echo "This works: {$arr[4][3]}";

// Isso está errado pela mesma razão que $ foo [bar] está errado fora de uma string.
// Em outras palavras, ainda funcionará, mas apenas porque o PHP primeiro procura por um
// constante chamada foo; um erro de nível E_NOTICE (constante indefinida) será
// lançado.

echo "This is wrong: {$arr[foo][3]}";

//Trabalho. Ao usar matrizes multidimensionais, sempre use colchetes ao redor das matrizes
//quando dentro de strings
echo "This works: {$arr['foo'][3]}";

//Trabalho
echo "This works: " . $arr['foo'][3];

echo "This works too: {$obj->values[3]->name}";

echo "This is the value of the var named $name: {${$name}}";

echo "This is the value of the var named by the return value of getName(): {${getName()}}";

echo "This is the value of the var named by the return value of \$object->getName(): {${$object->getName()}}";

//Não funciona, resulta: Este é o valor de retorno de getName (): {getName ()}
echo "This is the return value of getName(): {getName()}";

/**
 * Também é possível acessar propriedades de classes usando variáveis que contêm strings utilizando esta sintaxe. 
*/

class foo{
    var $bar = 'I am bar.';
}

$foo = new foo();
$bar = 'bar';
$baz = array('foo', 'bar', 'baz', 'quux');

echo "{$foo->$bar}\n";
echo "{$foo->{$baz[1]}}\n";

/**
 * Nota: Funções, chamadas a métodos, variáveis estáticas de classe e constantes de classe dentro de {$} funcionam a partir do PHP 5. Entretanto, o valor acessado deverá ser interpretado como o nome de uma variável no escopo em que a string está definida. Utilizar somente chaves ({}) não funcionará para acessar os valores de retorno de funções ou métodos nem os valores de constantes da classe ou variáveis estáticas da classe. 
 * 
*/

class beers{
    const softdrink = 'rootbeer';
    public static $ale = 'ipa';
}

$rootbeer = 'A & W';
$ipa = 'Alexander Keith\'s';

//Isso funciona; saídas: eu gostaria de um A & W
echo "I'd like an {${beers::softdrink}}\n";

//Isso também funciona; saídas: eu gostaria de um Alexander Keith
echo "I'd like an {${beers::$ale}}\n";

?>