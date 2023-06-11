<?php

/**
 * * COMPARANDO
 * 
 * É possível comparar arrays utilizando a função array_diff() e com a utilização dos operadores de array.
 * 
 * * EXEMPLOS
 * 
 * O tipo array do PHP é muito versátil. Temos aqui alguns exemplos:
*/

//ISSO:
$a = array(
           'color' => 'red',
           'taste' => 'sweet',
           'shape' => 'round',
           'name' => 'apple',
           4  //a chave será 0
);

$b = array('a', 'b', 'c');

// ... é equivalente a isso:
$a = array();
$a['color'] = 'red';
$a['taste'] = 'sweet';
$a['shape'] = 'round';
$a['name'] = 'apple';
$a[] = 4; //a chave será 0

$b = array();
$b[] = 'a';
$b[] = 'b';
$b[] = 'c';

//Após a execução do código acima, $ será o array
//array('color' => 'red', 'taste' => 'sweet', 'shape' => 'round',
// 'name' => 'apple', 0 => 4), e $b será o array
//array(0 => 'a', 1 => 'b', 2 => 'c'), ou simplesmente array('a', 'b', 'c').

//Exemplo #8 Utilizando array()

//Array como propriedade-mapa

$map = array('versao' => 4,
             'OS' => 'linux',
             'lang' => 'inglês',
             'short_tags' => true
            );

//apenas chaves numéricas
$array = array(7,
               8,
               0,
               156,
               -10
);

//que é o mesmo que array(0=>7, 1=>8,...)

$switching = array(
                 10, //chave = 0
                 5 => 6,
                 3 => 7,
                 'a' => 4,
                 11, //chave = 6 (o índice máximo era 5)
                 '8' => 2 ,//chave = 8 (inteiro!)
                 '02' => 77, //chave = '02'
                 0 => 12 //o valor 10 será sobrescrito por 12
                );

//array vazio
$empty = array();

//Exemplo #9 Coleção

$cores = array('vermelho', 'azul', 'verde', 'amarelo');

foreach ($cores as $cor) {
    echo "Você gosta de $cor?\n";
}

/**
 * É possível alterar diretamente os valores de um array passando-os como referência. 
*/

//Exemplo #10 alterando valores em um laço
foreach($cores as &$color) {
    $color = strtoupper($color);
}

unset($color); 
/*
  * certifique-se de que as seguintes gravações para
$ color não irá modificar o último elemento do array
*/

print_r($cores);

/**
 *  Este exemplo cria um array na base 1.
*/

//Exemplo #11 Array Baseado em 1

$primeiroquarto = array(1 => 'Janeiro', 'Fevereiro', 'Março');
print_r($primeiroquarto);

//Exemplo #12 Preenchendo um array

//preenchendo um array com todos os intes de um diretorio
$handle = opendir('.');
while(false !== ($file = readdir($handle))) {
    $files[] = $file;
}

closedir($handle);

/**
 * Arrays são ordenados. A ordem pode ser modificada utilizando várias funções de ordenação. 
 * 
 *  A função count() pode ser utilizada para contar o número de itens em um array.
*/

//Exemplo #13 Ordenado arrays
sort($files);
print_r($files);

/**
 * Como o valor de um array pode ser qualquer coisa, isso significa que também poderá ser outro array. Isso habilita a criação de arrays recursivos e multidimensionais. 
*/

//Exemplo #14 Arrays recursivos e multidimensionais

$fruits = array ( "frutas"  => array ( "a" => "laranja",
                                       "b" => "banana",
                                       "c" => "maçã",
                                     ),
                  "numeros" => array ( 1,
                                       2,
                                       3,
                                       4,
                                       5,
                                       6
                                     ),
                  "buracos" => array (      "primeiro",
                                       5 => "segundo",
                                            "terceiro",
                                     ),
);

// Alguns exemplo de enderecos dos valores do array acima
echo $fruits["buracos"][5];   // prints "segundo"
echo $fruits["frutas"]["a"];  // prints "laranja"
unset($fruits["buracos"][0]); // remove "primeiro"

// Criando um novo array multidimensional
$sucos["maca"]["verde"] = "bom";

/**
 * Atribuições de array sempre envolvem cópias de valores. Use o operador de referência para copiar um array por referência.
*/

$arr1 = array(2, 3);
$arr2 = $arr1;
$arr2[] = 4; // $arr2 é modificado,
             // $arr1 continua sendo apenas array(2, 3)

//arr3 recebe por referencia o array1
$arr3 = &$arr1;
$arr3[] = 4; // agora $arr1 e $arr3 sao os mesmos
?>