<?php

/**
 * * EXEMPLO #1 REFERÊNCIAS E OBJETOS
 * 
 *  
*/

//definição da classe A
class A{
    //propriedade da classe ja inicializada
    public $foo = 1;
}

# instancia de objeto 
$a = new A;
//as duas variaveis vai referencia para o mesmo objeto
// as duas armazenam um identificador que aponta para o mesmo objeto

$b = $a; //$a e $b são cópias do mesmo identificador ($a) = ($b) = <id>
$b->foo = 2;
echo $a->foo . "</br>";

//vão referenciar o mesmo valor, mesmo sendo duas variaveis diferentes, apontam para o mesmo objeto,
$c = new A;
$d = &$c; //$c e $d são referências ($c, $d) = <id>

$d->foo = 2;
echo $c->foo . "</br>";

$e = new A;

function foo($obj) {
    //($obj) = ($e) = <id>
    $obj->foo = 2;
}

foo($e);
echo $e->foo . "</br>";

?>