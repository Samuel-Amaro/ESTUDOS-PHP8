<?php

/**
 * * switch
 * 
 *  A declaração switch é similar a uma série de declarações IF na mesma expressão. Em muitos casos, se deseja comparar as mesmas variáveis (ou expressões), com diferentes valores, e executar pedaços diferentes de código dependendo de qual valor ela é igual. Esta é exatamente a serventia da declaração switch.
 * 
 * 
 * Os dois exemplos a seguir demonstram duas formas diferentes de escrever a mesma coisa, uma usando uma série de declarações if e elseif, e a outra usando a declaração switch:
*/

$i = 2;

if($i == 0) {
    echo "i igual 0 <br/>";
}elseif($i == 1) {
    echo "i igual 1 <br/>";
}elseif($i == 2) {
    echo "i igual 2 <br/>";
}

switch($i) {
    case 0:
        echo "i igual 0 <br/>";
        break;
    case 1:
        echo "i igual 1 <br/>";
        break;
    case 2:
        echo "i igual 2 <br/>";
        break;
}

$i = 'bar';

//Exemplo #2 A estrutura do switch permite o uso de strings

switch($i) {
    case "apple":
        echo "isso e apple <br>";
        break;
    case "bar":
        echo "i is bar <br>";
        break;
    case "cake":
        echo "i is cake <br>";
        break;
}

/**
 * É importante entender como a declaração switch é executada a fim de evitar enganos. A declação switch executa linha por linha (na verdade, declaração por declaração). No início nenhum código é executado. Somente quando uma declaração case é encontrada, cuja expressão avalia um valor que corresponde ao valor do switch, o PHP começará a executar a declaração. O PHP continuará a executar a declaração até o fim do bloco switch, ou até a primeira declaração break encontrada. Se não for escrita uma declaração break ao final da lista de declarações do case, o PHP continuará executando as declarações dos próximos cases. Por exemplo: 
*/

$i = 0;

switch ($i) {
    case 0:
        echo "i equals 0";
    case 1:
        echo "i equals 1";
    case 2:
        echo "i equals 2";
}

/**
 * Neste exemplo, se a variável $i for igual a 0, o PHP executará todos as declarações echo! Se a variável $i for igual a 1, o PHP executará as duas últimas declarações echo. Somente se obterá o comportamento esperado ('i equals 2' será exibido), se $i for igual a 2. Sendo assim, é importante não esquecer as declarações break (mesmo quando se quer evitar, de propósito, sua omissão em certas circunstâncias). 
 * 
 * Em uma declaração switch, a condição é avaliada somente uma vez, e o resultado é comparado a cada declaração case. Em uma declaração elseif. a condição é avaliada outra vez. Se a condição for mais complicada que uma simples comparação e/ou está em um laço pequeno, a declaração switch pode ser mais rápida.
 * 
 * A lista de declarações de um case também podem estar vazia, passando o controle da lista de declarações para o próximo case.
*/

switch ($i) {
    case 0:
    case 1:
    case 2:
        echo "i is less than 3 but not negative";
        break;
    case 3:
        echo "i is 3";
}

/**
 * Um case especial é o default. Este case corresponde a tudo que não foi correspondido pelos outros cases. Por exemplo: 
*/

switch ($i) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
    default:
       echo "i is not equal to 0, 1 or 2";
}
?>