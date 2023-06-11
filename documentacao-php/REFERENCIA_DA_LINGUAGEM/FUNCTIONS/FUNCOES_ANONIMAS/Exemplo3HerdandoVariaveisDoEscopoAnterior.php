<?php

/**
 * * HERDANDO VARIÁVEIS DO ESCOPO ANTERIOR
 *  
*/

$message = 'Hello';

//sem "use"
$exemplo = function() {
    var_dump($message);
};

$exemplo();

//herança $message

$exemplo = function () use ($message) {
    //Despeja informações sobre uma variável
    //var_dump (mixed $ expression [, mixed $ ...]) :  string
    var_dump($message);
};

$exemplo();

//herdando valor da variável quando a função é definida,
//não quando é chamada
$message = 'word';
$exemplo();

//reseta mensagem
$message = 'hello';

//herdando por referência
$exemplo = function() use (&$message) {
    var_dump($message);
};

$exemplo();

//o valor modificado no escopo pai
//reflete quando a função é chamada
$message = 'word';
$exemplo();

//closures também aceitam argumentos normais
$exemplo = function($arg) use ($message) {
    var_dump($arg . ' ' . $message);
};

$exemplo("hello");

/**
 * A partir do PHP 8.0.0 a lista de variáveis herdadas no escopo podem incluir uma vírgula final, que será ignorada.
 * 
 *  
*/
?>