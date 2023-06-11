<?php

/**
 * * USE DECLARAÇÕES DO GRUPO
 * 
 *  Classes, funções e constantes importadas das mesmas namespace podem ser agrupadas em uma única use instrução.
*/

//importações de nomes reservados de um mesmo namespace
use some\namespace\ClassA;
use some\namespace\ClassB;
use some\namespace\ClassC as C;

use function some\namespace\fn_a;
use function some\namespace\fn_b;
use function some\namespace\fn_c;

use const some\namespace\ConstA;
use const some\namespace\ConstB;
use const some\namespace\ConstC;

// e equivalente para a seguinte declaração de uso agrupado
use some\namespace{ClassA, ClassB, ClassC as C};
use function some\namespace{fn_a, fn_b, fn_c};
use const some\namespace\{ConstA, ConstB, ConstC};

?>