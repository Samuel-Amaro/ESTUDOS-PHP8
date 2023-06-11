<?php

/**
 * * UTILIZANDO VARIÁVEIS STATIC
 * 
 *  Outro recurso importante do escopo de variáveis é a variável static. Uma variável estática existe somente no escopo local da função, mas não perde seu valor quando o nível de execução do programa deixa o escopo. Considere o seguinte exemplo:
*/

//Exemplo #4 Exemplo demostrando a necessidade de variaives estáticas

function Teste() {
    $a = 0;
    echo $a;
    $a++;
}

Teste();
Teste();

/**
 * Essa função é inútil, já que cada vez que é chamada, define $a com o valor 0, e imprime 0. A instrução $a++ , que aumenta o valor da variável, não tem sentido já que assim que a função termina a variável $a desaparece. Para fazer um função contadora, que não perderá a conta atual, a variável $a será declarada como estática:
*/

//Exemplo #5 Exemplo de uso de variáveis estáticas

function teste2() {
    static $a = 0;
    echo $a;
    $a++;
}

teste2();
teste2();

/**
 * Agora, a variável $a é inicializada apenas na primeira chamada da função e cada vez que a função test() for chamada, imprimirá o valor de $a e depois o incrementará.
 * 
 * Variáveis estáticas fornecem uma solução para lidar com funções recursivas. Uma função recursiva é aquela chama a si mesma. Cuidados devem ser tomados quando escrever funções recursivas porque é possível que ela continue na recursão indefinidamente. Deve-se assegurar que há uma maneira adequada de terminar a recursão. A seguinte função recursiva conta até 10, utilizando a variável estática $count para saber quando parar:
*/

//Exemplo #6 Variáveis estáticas em funções recursivas

function teste3() {
    static $count = 0;
    echo $count;
    if($count < 10) {
        teste3();
    }
    $count--;
}

teste3();

/**
 * Nota: Variáveis estáticas podem ser declaradas como visto nos exemplos acima. A partir do PHP 5.6 é possível atribuir valores a essas variáveis, que são resultados de expressões, porém não é possível usar nenhuma função, o que causará um erro de interpretação.
 * 
 *  
*/

//Exemplo #7 Declarando variáveis estáticas

function foo() {
    static $int = 0; //correro
    static $int = 1 + 2; //correto (A partir do PHP 5.6)
    static $int = sqrt(121); //errado (é uma expressão)
    $int++;
    echo $int;
}
?>