<?php

/**
 * * EXEMPLO #2 DEFININDO CONSTANTES USANDO A PALAVRA-CHAVE CONST 
*/

//FUNCTIONA A PARTIR DO PHP 5.3.0
const CONSTANT = 'Hello World';

echo CONSTANT;

//FUNCIONA A PARTIR DO PHP 5.6.0
const ANOTHER_CONST = CONSTANT . "; Goodbye World";
echo ANOTHER_CONST;

const ANIMALS = array('dog', 'cat', 'bird');
echo ANIMALS[1]; //imprime "cat"

//A PARTIR DO PHP 7
define('ANIMALS', array(
        'dog',
        'cat',
        'bird'
));

echo ANIMALS[1]; //imprime "cat"

?>