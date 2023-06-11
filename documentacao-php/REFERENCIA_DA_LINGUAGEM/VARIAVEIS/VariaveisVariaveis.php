<?php

/**
 * * VARIÁVEIS VARIÁVEIS
 * 
 * As vezes, é conveniente possuir variáveis com nomes variáveis. Isto é, o nome de uma variável que pode ser definido e utilizado dinamicamente. Uma variável normal é definida com uma instrução como:
*/

$a = 'hello';

/**
 * Uma variável variável obtém o valor de uma variável e a trata como o nome de uma variável. No exemplo acima, hello pode ser utilizada como o nome de uma variável utilizando dois sinais de cifrão: 
*/

//nome da variavel variavel: hello
$$a = "word";

/**
 * Neste ponto, duas variáveis foram definidas e armazenadas na árvore de símbolos do PHP: $a que contém "hello" e $hello que contém "world". Assim, esta instrução:
*/

echo "$a ${$a} <br>";

//produz a mesma saida

echo "$a $hello";

/**
 * Para poder utilizar variáveis variáveis com arrays, você precisa resolver um problema de ambiguidade. Isso é, se você escrever $$a[1] o interpretador precisa saber que se deseja utilizar $a[1] como uma variável ou que se deseja usar $$a como uma variável e [1] como o índice dessa variável. A sintaxe para resolver essa ambiguidade é ${$a[1]} para o primeiro caso e ${$a}[1], para o segundo.
 * 
 *  Propriedades de classes também podem ser acessadas utilizando-se nomes de propriedades variáveis. O nome de propriedade variável será resolvido dentro do escopo em que a chamada foi feita. Por exemplo, se houver uma expressão como $foo->$bar, o escopo local será examinado procurando por $bar e seu valor será utilizado como o nome da propriedade $foo. Isso também funciona se $bar for um array.
 * 
*/

//Exemplo #1 Exemplo de propriedade variável

class foo{
    var $bar = 'I am bar';
    var $arr = array('I am A.', 'I am B', 'I am C');
    var $r = 'I am r';
}

$foo = new foo();
$bar = 'bar';
$baz = array('foo', 'bar', 'baz', 'quux');
echo $foo->$bar . "\n";
echo $foo->{$baz[1]} . "\n";

$start = 'b';
$end = 'ar';
echo $foo->{$start . $end} . "\n";

$arr = 'arr';
echo $foo->{$arr[1]} . "\n";
?>