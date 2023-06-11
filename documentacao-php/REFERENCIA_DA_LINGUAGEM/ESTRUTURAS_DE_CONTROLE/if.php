<?php

/**
 * O construtor if é um dos recursos mais importantes em muitas linguagens, inclusive no PHP. Permite a execução condicional de fragmentos de código. O PHP apresenta uma estrutura if semelhante a do C:
*/

if(expr)
    statement;

/**
 * Se uma expressão for avaliada como true, o PHP executará a declaração, e se avaliá-la como false - ignorá-la.
 * 
 * O exemplo a seguir exibirá a is bigger than b se $a for maior que $b:
 * 
*/

$a = 10;
$b = 5;

if($a > $b)
    echo "a e maio que b";

/**
 * Muitas vezes deseja-se que mais de uma declaração seja condicionalmente executada. É claro que não é necessário envolver cada declaração em uma cláusula if. Em vez disso, pode-se agrupar várias declarações em grupos. Por exemplo, este código exibirá a is bigger than b se $a for maior que $b, e atribuirá o valor de $a em $b: 
*/

if($a > $b) {
    echo "a e maior que b";
    $b = $a;
}

/**
 * A declaração If pode ser aninhada indefinidamente dentro de outras declarações if, fornecendo completa flexibilidade para execução condicional de várias partes do programa. 
*/
?>