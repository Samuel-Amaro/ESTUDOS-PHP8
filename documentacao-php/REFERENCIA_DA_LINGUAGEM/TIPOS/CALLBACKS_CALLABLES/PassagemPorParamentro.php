<?php 

/**
 * * PASSAGEM POR PARÂMETRO
 * 
 *  Uma função PHP é passada através do seu nome como uma string. Qualquer função interna ou definida pelo usuário pode ser utilizada, com exceção dos construtores de linguagem como: array(), echo, empty(), eval(), exit(), isset(), list(), print ou unset().
 * 
 * Um método de um objeto instanciado é passado como um array contendo um objeto no índice 0 e o nome do método no índice 1. Acessar métodos protegidos e privados de uma classe é permitido.
 * 
 * Métodos estáticos também podem ser passados sem a instância de um objeto dessa classe ao passar o nome da classe ao invés de um objeto no índice 0. A partir do PHP 5.2.3, também é possível utilizar 'NomeDaClasse::nomeDoMetodo'.
 * 
 * Além de funções comuns definidas pelo usuário, funções anônimas também podem ser passadas como um parâmetro de callback.
*/

?>