<?php

/**
 * * A PALAVRA-CHAVE global
 * 
 *  Primeiro, um exemplo de global:
 * 
*/

//Exemplo #1 Usando global

$a = 1;
$b = 2;

function Soma() {
    global $a, $b;

    $b = $a + $b;
}

Soma();

echo $b ."<br/>";

/**
 * O script acima imprimirá3. Declarando $a e $b globais na função, fará com que todas as referências a essas variáveis referenciem a versão global. Não há um limite para o número de variáveis globais que podem ser manipuladas por uma função.
 * 
 *  Uma segunda maneira de acessar variáveis do escopo global é utilizando o array especial $GLOBALS definido pelo PHP. O exemplo anterior poderia ser reescrito como:
*/

//Exemplo #2Usando $GLOBALS no lugar de global

function soma2() {
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

soma2();

echo $b;

/**
 * O array $GLOBALS é um array associativo, sendo o nome da variável global a chave do array e o seu conteúdo da variável como o valor do elemento do array. Veja que $GLOBALS existe em qualquer escopo, isto porque $GLOBALS é uma superglobal. Segue um exemplo demonstrando o poder das superglobais: 
*/

//Exemplo #3 Exemplo demostrando superglobals e escopos

function test_global() {

    //A maioria das variaveis pré-definidas não são 'super' e requerem 'global' para serem disponiveis para funções em qualquer escopo

    global $HTTP_POST_VARS;

    echo $HTTP_POST_VARS['name'];

    //Superglobais são disponiveis em qualquer escopo e nao precisam de 'global'. Superglobais existem desde o PHP 4.1.0, e HTTP_POST_VARS é agora tida como obsoleta.
    echo $_POST['name'];
}

/**
  * Nota: Utilizar a instrução global fora de uma função não é um erro. Deve ser utilizado se um arquivo for incluído dentro de uma função. 
*/

?>