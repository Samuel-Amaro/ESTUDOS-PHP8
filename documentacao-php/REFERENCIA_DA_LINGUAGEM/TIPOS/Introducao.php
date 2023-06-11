<?php

/**
 * * INTRODUÇÃO A TIPOS EM PHP
 * 
 * O PHP suporta dez tipos primitivos.
 * 
 * Quatro tipos escalares:
  
   - bool
   - int
   - float(número de ponto flutuante, ou também double)
   - string

 * 
 * Quatro tipos compostos:
 
    - array
    - object
    - callable
    - iterable

 * 
 * E finalmente dois tipos especiais:
 
    - resource
    - NULL

 * 
 * Algumas referências para o tipo "double" podem aparecer no manual. Considere o tipo double como sendo o float; os dois nomes existem por razões históricas.
 * 
 * O tipo de uma variável geralmente não é definido pelo programador: isto é decidido em tempo de execução pelo PHP, dependendo do contexto no qual a variável é usada.
 * 
 * Nota: Para checar o tipo e valor de uma expressão, utilize a função var_dump().
 * 
 * Para ter uma representação legível de um tipo para depuração, use a função gettype(). Para verificar por um certo tipo, não use gettype(), mas sim as funções is_tipo. Alguns exemplos:
*/

$a_bool = TRUE; //um booleano
$a_str = "foo"; //uma string
$a_str2 = 'foo'; //uma string
$an_int = 12; //um inteiro

//gettype($variavel) -> mostra o tipo da variavel

echo gettype($a_bool); //mostra: boolean
echo gettype($a_str); //mostra : string

//se ele é um inteiro(is_int), incrementa-o com quatro
if(is_int($an_int)) {
    $an_int += 4;
}

//Se $bool é uma string(is_string), mostre-a
//(não imprime nada)
if(is_string($a_bool)) {
    echo "String: $a_bool";
}

/**
 * Para forçar a conversão de uma variável para um certo tipo, converta a variável ou use a função settype() nela.
 * 
 * Note que uma variável pode ser avaliada com valores diferentes em certas situações, dependendo de qual tipo ela é no momento.
*/
?>