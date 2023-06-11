<?php 


/**
 * * SINTAXE
 * 
 *  Você pode definir uma constante utilizando a função define(), ou a palavra-chave const fora da definição de uma classe a partir do PHP 5.3.0. Enquanto define() permite que uma constante seja definida para uma expressão arbitrária, a palavra-chave const possui restrições conforme descrita no próximo parágrafo. Uma vez definida, a constante não poderá ser modificada ou anulada.
 * 
 * Ao usar a palavra-chave const, somente dados escalares (boolean, integer, float e string) podem ser colocados em constantes até o PHP 5.6. A partir do PHP 5.6, é possível também utilizar qualquer expressão escalar como constantes e também array constante. É permitido o uso de um resource (recurso) como valor de constante, mas deve ser evitado, já que pode causar resultados inesperados.
 * 
 * Pode-se obter o valor de uma constante simplesmente especificando seu nome. Diferentemente de variáveis, você não prefixará uma constante com um sinal de $. Também pode-se utilizar a função constant() para ler o valor de uma constante, se você precisar obter seu valor dinamicamente. Utilize get_defined_constants() para obter a lista de todas as constantes definidas.
 * 
 * Estas são as diferenças entre constantes e variáveis:
 
        - Constantes não possuem um sinal de cifrão ($) antes delas;

        - Antes do PHP 5.3 as constantes só poderiam ser definidas utilizando a função define(), e não por simples assimilação;

        - Constantes podem ser definidas e acessadas de qualquer lugar sem que a regras de escopo de variáveis sejam aplicadas;

        - Constantes não podem ser redefinidas ou eliminadas depois de criadas; e

        - Constantes só podem ter valores escalares. A partir do PHP 5.6 é possível definir um array constante com a instrução const e a partir do PHP 7 arrays constantes também podem ser definidas utilizando a função define() Pode-se utilizar arrays em expressões escalares constantes (por exemplo const FOO = array(1,2,3)[0];), cujo resultado final deve ser um valor de um tipo permitido.
*/

//Exemplo #1 Definindo Constantes

define("CONSTANT", "Hello world.");
echo CONSTANT; //imprime "Hello World"
echo Constant; //imprime "Constant e gera um alert notice.

?>