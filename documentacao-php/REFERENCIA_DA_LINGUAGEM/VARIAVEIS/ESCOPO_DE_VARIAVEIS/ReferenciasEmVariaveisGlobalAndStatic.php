<?php

/**
 * * REFERENCIAS EM VARIÁVEIS global E static
 * 
 *  A Zend Engine 1, base do PHP 4, implementa os modificadores static e global para variáveis, em termo de referências. Por exemplo, uma variável global verdadeira, importada dentro do escopo de uma função com a instrução global, na verdade, cria uma referência para a variável global. Isto pode levar a comportamentos imprevisíveis nos seguintes casos:
*/

function test_global_ref() {
    global $obj;
    $obj = &new stdclass;
}

function test_global_noref() {
    global $obj;
    $obj = new stdclass; 
}

test_global_ref();
var_dump($obj);
test_global_noref();
var_dump($obj);

/**
 * Um comportamento similar se aplica a declaração static. Referências não são armazenadas estaticamente: 
*/

function &get_intance_ref() {
    static $obj;

    echo 'Objeto estatico: ';
    var_dump($obj);
    if(!isset($obj)) {
        //Assimila uma referncia a variavel estatica
        $obj = &new stdclass;
    }
    $obj->property++;
    return $obj;
}

function &get_instance_noref() {
    static $obj;

    echo "Objeto estatico: ";
    var_dump($obj);
    if(!isset($obj)) {
        //Assimila o objeto para a variavel estatica
        $obj = new stdclass;
    }
    $obj->property++;
    return $obj;
}

$obj1 = get_instance_ref();
$still_obj1 = get_instance_ref();
echo "\n";
$obj2 = get_instance_noref();
$still_obj2 = get_instance_noref();

?>