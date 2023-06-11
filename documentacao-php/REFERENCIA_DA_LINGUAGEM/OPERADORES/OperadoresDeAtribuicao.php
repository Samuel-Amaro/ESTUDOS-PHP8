<?php 

/**
 * * OPERADORES DE ATRIBUIÇÃO
 * 
 *  O operador básico de atribuição é "=". A sua primeira inclinação deve ser a de pensar nisto como "é igual". Não. Isto quer dizer, na verdade, que o operando da esquerda recebe o valor da expressão da direita (ou seja, "é definido para").
 * 
 * O valor de uma expressão de atribuição é o valor atribuído. Ou seja, o valor de "$a = 3" é 3. Isto permite que você faça alguns truques:
 * 
*/

      //4     + 5
$a = ($b = 4) + 5; //$a é igual a 9 agora e $b foi definido como 4.

/**
 *  Além do operador básico de atribuição, há "operadores combinados" para todos os operadores aritméticos, de array e string que permitem a você pegar um valor de uma expressão e então usar seu próprio valor para o resultado daquela expressão. Por exemplo:
*/

$a = 3;
$a += 5; //define $a para 8, como se disséssemos: $a = $a + 5;

$b = "Bom";
$b .= "Dia!"; //define $b para "Bom Dia!", como em $b = $b . "Dia!";

/**
 * Note que a atribuição copia a variável original para a nova (atribuição por valor), assim a mudança de uma não afeta a outra. Isto pode ser relevante se você precisa copiar algo como uma grande matriz dentro de um loop apertado.
 * 
 * 
 * * ATRIBUIÇÃO POR REFERÊNCIA
 * 
 * Atribuição por referência também é possível, utilizando-se a sintaxe "$var = &$outravar;". A atribuição por referência significa que ambas as variáveis apontam para o mesmo dado, e nada é copiado.
 * 
 * Exemplo #1 Atribuição por referência
*/

$a = 3;
$b = &$a; //$b é uma referência de $a

print "$a \n"; //imprime 3
print "$b \n"; //imprime 3

$a = 4; //modificamos $a

print "$a \n"; //imprime 4
print "$b \n"; //imprime 4 também, pos $b é uma referência de $a, que foi modificada
?>