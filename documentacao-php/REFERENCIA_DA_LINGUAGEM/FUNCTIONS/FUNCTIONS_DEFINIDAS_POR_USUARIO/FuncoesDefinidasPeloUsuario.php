<?php 

/**
 * * FUNÇÕES DEFINIDAS PELO USUÁRIO
 * 
 *  Uma função pode ser definida usando a seguinte sintaxe:
*/

//Exemplo #1 Pseudo-código de demonstração de uma função

function foo($arg_1, $arg_2, /*...,*/ $arg_n) {
    echo "Exemplo de função .\n";
    return $valor_retornado;
}

/**
 * Qualquer código PHP válido pode aparecer dentro de uma função, mesmo outras funções e definições de classes.
 * 
 *  Nomes de funções seguem as mesmas regras que outros nomes no PHP. Um nome de função válido começa com uma letra ou um sublinhado, seguido, seguido por qualquer número de letras, números ou sublinhado. Com uma expressão regular, seria expressado com: ^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$.
 * 
 * As funções não precisam ser criadas antes de serem referenciadas, exceto quando uma função é condicionalmente definida como mostrado nos dois exemplos abaixo.
 * 
 * Quando uma função é definida condicionalmente como nos dois exemplos abaixo, sua definição precisa ser processada antes de ser chamada.
*/

//Exemplo #2 Funções definidas condicionalmente

$makefoo = true;

/*
 * nos não podemos chamar foo() daqui porque ela ainda não existe, mas nos podemos chamar bar()
*/

bar();

if($makefoo) {
    function foo() {
        echo "Eu não existo até que o programa passe por aqui!\n";
    }
}

/**
 * agora nos podemos chamar foo() porque $makefoo foi avaliado como true 
*/

if($makefoo) foo();

function bar() {
    echo "Eu exito imediatamente desde o programa começar. \n";
}

//funcoes dentro de funções

function foo() {
    function bar() {
        echo "Eu não existo até foo() ser chamada. \n";
    }
}

/*
 * nos não podemos chamar bar() ainda porque ela ainda não foi definida
*/

foo();

/*agora nos podemos chamar bar(), porque o processamentode foo() tornou a primeira acessivel*/

bar();

/**
 * Todas as funções e classes no PHP tem escopo global - elas podem ser chamadas fora de uma função mesmo que tenham sido definidas dentro e vice-versa.
 * 
 *  O PHP não suporta sobrecarga de funções, e também não é possível cancelar ou alterar a definição de funções previamente declaradas.
*/

//funções recursivas

function recursao($a) {
    if($a < 20) {
        echo "$a \n";
        recursion($a + 1);
    }
}

recursao(1);

/**
 * Nota: Chamadas recursivas a funções/métodos acima de 100-200 níveis podem exaurir a pilha e causar o término do script. Especificamente, recursão infinita é considerada um erro de programação 
*/
?>