<?php

//$t = strlen("1");
//echo "tamanho de 1 = $t";

/**
 * * BÁSICO
 * 
 *  As variáveis no PHP são representadas por um cifrão ($) seguido pelo nome da variável. Os nomes de variável são case-sensitive.
 * 
 * Nomes de variável seguem as mesmas regras como outros rótulos no PHP. Um nome de variável válido inicia-se com uma letra ou sublinhado, seguido de qualquer número de letras, números ou sublinhados.
*/

$var = 'Bob';
$Var = 'Joe';
echo "$var, $Var"; //exibe "Bob, Joe";

//$4site = 'not yet'; //inválido; começa com um número
$_4site = 'not yet'; //válido; começa com um sublinhado
$tayte = 'mansikka'; //válido; 'a' é um caracter ASCII(extendido) 228

/**
 * Por padrão, as variáveis são sempre atribuídas por valor. Isto significa que ao atribuir uma expressão a uma variável, o valor da expressão original é copiado integralmente para a variável de destino.
 * 
 * O PHP também oferece um outro meio de atribuir valores a variáveis: atribuição por referência. Isto significa que a nova variável simplesmente referencia (em outras palavras, "torna-se um apelido para" ou "aponta para") a variável original. Alterações na nova variável afetam a original, e vice versa.
 * 
 * Para atribuir por referência, simplesmente adicione um e-comercial (&) na frente do nome da variável que estiver sendo atribuída (variável de origem) Por exemplo, o trecho de código abaixo imprime 'My name is Bob' duas vezes:
*/

$foo = 'Bob'; //Atribui o valor 'Bob' a variável $foo
$bar = &$foo; //Referencia $foo através de $bar.
$bar = "My name is $bar"; //Altera $bar...
echo $bar; 
echo $foo; //$foo é alterada também

/**
 * Uma observação importante a se fazer, é que somente variáveis nomeadas podem ser atribuídas por referência. 
*/

$foo = 25;
$bar = &$foo; //Esta atribuição é válida
//$bar = &(24 * 7); //Inválido; referencia uma expressão sem nome

function test() {
    return 25;
}

$bar = &test(); //Inválido

/**
 * Não é necessário inicializar variáveis no PHP, contudo é uma ótima prática. Variáveis não inicializadas tem um valor padrão de tipo dependendo do contexto no qual são usadas - padrão de booleanos é false, de inteiros e ponto-flutuantes é zero, strings (por exemplo, se utilizados em echo), são definidas como vazia e arrays tornam-se um array vazio.
*/

//Exemplo #1 Valores padrões de variáveis não inicializadas

//Limpa e remove referência (sem uso de contexto) a variável; imprime NULL
var_dump($unset_var);

//Uso de booleano; imprime 'false' (Veja sobre operadores ternário para saber mais sobre sintaxe)
echo ($unset_bool ? "true" : "false"); //false

//Uso de string; imprime 'string(3) "abc"'
$unset_str .= 'abc';
var_dump($unset_str);

//Uso de inteiro; imprime 'int(25)'
$unset_int += 25; //0 + 25 => 25
var_dump($unset_int);

//Uso de float/Double; iprime 'float(1.25)'
$unset_float += 1.25;
var_dump($unset_float);

//Uso de array; imprime array(1) { [3]=> string(3) "def" }
$unset_arr[3] = "def"; //array() + array(3 => "def") => array(3 => "def")
var_dump($unset_arr);

//Uso de objeto; cria novo objeto stdClass
//Imprime: object(stdClass) #1 (1) { ["foo"] => string(3) "bar"}
$unset_obj->foo = 'Bar';
var_dump($unset_obj);

/**
 * Confiar no valor padrão de uma variável não inicializada é problemático no caso de incluir um arquivo em outro que usa uma variável de mesmo nome. Erros de nível E_NOTICE serão emitidos no caso de ter variáveis não inicializadas, contudo não no caso de adicionar elementos a um array não inicializado. O construtor da linguagem isset() pode ser usado para detectar se uma variável não foi inicializada. 
*/



?>