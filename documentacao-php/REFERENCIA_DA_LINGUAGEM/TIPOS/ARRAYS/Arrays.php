<?php

/** 
 * * ARRAYS
 * 
 * Um array no PHP é na verdade um mapa ordenado. Um mapa é um tipo que relaciona valores a chaves. Este tipo é otimizado para várias usos diferentes: ele pode ser tratado como um array, uma lista (vetor), hashtable (que é uma implementação de mapa), dicionário, coleção, pilha, fila e provavelmente mais. Assim como existe a possibilidade dos valores do array serem outros arrays, árvores e arrays multidimensionais.
 * 
 *  A explicação dessas estruturas está além do escopo desse manual, mas pelo menos um exemplo é dado para cada uma delas.
 * 
 * * SINTAXE
 * 
 * * Especificando com array() 
 * 
 * Um array pode ser criado com o construtor de linguagem array(). Ele leva qualquer quantidade de pares separados por vírgula chave => valor como argumentos.
 
    array(
        chave  => valor,
        chave2 => valor2,
        chave3 => valor3,
        ...
    )

 * 
 * A vírgula após o último elemento do array é opcional e pode ser omitida. Isso geralmente é feito para arrays em uma única linha, por exemplo, array(1, 2) é preferível em vez de array(1, 2, ). Para arrays escritos em várias linhas, por outro lado, a vírgula a direita do último elemento é usada frequentemente, para permitir a adição de forma simples de novos elementos ao final.
 * 
 * A partir do PHP 5.4 você também pode utilizar a sintaxe contraída de array, que troca array() por [].
*/

//Exemplo #1 Um array Simples

$array = array(
    "foo" => "bar",
    "bar" => "foo",
);

//a partir do PHP 5.4

$array = [
    "foo" => "bar",
    "bar" => "foo",
];

/**
 * A chave pode ser um inteiro ou uma string. O valor pode ser de qualquer tipo. 
 
    - Strings contendo inteiros válidos, serão convertidos para o tipo inteiro. Por exemplo, a chave"8" será, na verdade, armazenada como 8. Entretanto, "08" não será convertido, por não ser um inteiro decimal válido.

    - Floats também são convertidos para inteiros, isso significa que a parte fracionada será removida. Por exemplo, a chave 8.7 será na verdade armazenada como 8.

    - Booleanos são convertidos para inteiros, igualmente, por exemplo, a chave true, será na verdade armazenada como 1 e a chave false como 0.

    - Null será convertido para uma string vazia, por exemplo, a chave null na verdade será armazenada como "".

    - Arrays e objetos não podem ser usados como chaves. Fazer isso resultará em um aviso: Illegal offset type.

 * 
 * Se vários elementos na declaração do array utilizam a mesma chave, apenas o último será utilizado, enquanto todos os outros serão sobrescritos.
*/

//Exemplo #2 Exemplo de conversão de tipo e sobrescrita
$array = array(
    1 => "a",
    "1" => "b",
    1.5 => "C",
    true => "d",
);

var_dump($array);

/**
 * Como todas as chaves do exemplo acima foram convertidas para 1, o valor será sobrescrito a cada novo elemento e o valor final atribuído "d", será o único que restará. 
 * 
 * As chaves dos arrays no PHP podem conter, ao mesmo tempo, inteiro e string, por que o PHP não faz distinção entre arrays indexados e associativos.
*/

//Exemplo #3 Misturando inteiro e string nas chaves

$array = array(
    "foo" => "bar",
    "bar" => "foo",
    100 => -100,
    -100 => 100,
);

//Despeja informações sobre uma variável
//var_dump (mixed $ expression [, mixed $ ...]): string

var_dump($array);

/**
 * A chave é opcional. Se não for especificada, o PHP utilizará o incremento da chave do tipo inteiro com maior valor utilizado.
 * 
*/

//Exemplo #4 Arrays Indexados sem chaves

$array = array("foo", "bar", "hello", "world");
var_dump($array);

/**
 * É possível especificar a chave somente para alguns elementos e omití-las para outros: 
*/

//Exemplo #5 Chaves em alguns elementos

$array = array(
        "a",
        "b",
    6 => "c",
         "d",
);
var_dump($array);

/**
 * Como pode ver, o último valor "d" foi atribuído a chave 7. Isso acontece porque a chave com maior inteiro antes dela era 6. 
*/
?>