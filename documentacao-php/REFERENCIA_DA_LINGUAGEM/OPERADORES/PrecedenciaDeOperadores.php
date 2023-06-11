<?php

/**
 * * PRECEDÊNCIA DE OPERADORES
 * 
 *  A precedência de um operador especifica quem tem mais prioridade quando há duas delas juntas. Por exemplo, na expressão 1 + 5 * 3, a resposta é 16 e não 18 porque o operador de multiplicação ("*") tem prioridade de precedência que o operador de adição ("+"). Parênteses podem ser utilizados para forçar a precedência, se necessário. Assim, (1 + 5) * 3 é avaliado como 18.
 * 
 * Quando operadores tem precedência igual a associatividade decide como os operadores são agrupados. Por exemplo "-" é associado à esquerda, de forma que 1 - 2 - 3 é agrupado como (1 - 2) - 3 e resulta em -4. "=" por outro lado associa para a direita, de forma que $a = $b = $c é agrupado como $a = ($b = $c).
 * 
 * Operadores de igual precedência sem associatividade não podem ser utilizados uns próximos aos outros. Por exemplo 1 < 2 > 1 é ilegal no PHP. A expressão 1 <= 1 == 1 por outro lado é válida, porque o operador == tem menor precedência que o operador <=.
 * 
 * O uso de parenteses, embora não estritamente necessário, pode melhorar a leitura do código ao deixar o agrupamento explícito em vez de depender da associatividade e precedências implícitos.
 * 
 * EXEMPLO #1 ASSOCIAÇÃO
*/

$a = 3 * 3 % 5; //(3 * 3) % 5 = 4
//associação do operador ternário difere do C/C++
$a = true ? a : true ? 1 : 2; //(true ? 0 : true) ? 1 : 2 = 2

$a = 1;
$b = 2;
$a = $b += 3; // $a = ($b += 3) -> $a = 5, $b = 5

/**
 * A precedência e associatividade apenas determinam como as expressões são agrupadas, mas não especificam a ordem de avaliação. O PHP (geralmente) não especifica em que ordem as expressões são avaliadas, então códigos que assumem ordens específicas de avaliação devem ser evitados porque o comportamento pode ser alterado entre versões do PHP ou dependendo do código em volta.
 *  
*/

//Exemplo #2 Ordem de avaliação não definida

$a = 1;
echo $a + $a++; // pode imprimir 2 ou 3

$i = 1;
$array[$i] = $i++; //pode definir o índice 1 ou 2

//Exemplo #3 +, - and . possuem a mesma precedência

$x = 4;
//esta linha pode resultar em uma saída inesperada:
echo "x menos um é igual a " . $x - 1 . ", ou assim eu espero \n";
//porque é avalida como esta linha:
echo (("x menos um é igual a " . $x) - 1 . ", ou assim eu espero \n");
//a precedência desejada pode ser aplicada utilizando parênteses:
echo "x menus um é igual a " . ($x - 1) . ", ou assim eu espero \n";

?>