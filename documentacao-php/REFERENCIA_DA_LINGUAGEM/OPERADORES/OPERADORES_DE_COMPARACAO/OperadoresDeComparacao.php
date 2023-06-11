<?php 

/**
 * * OPERADORES DE COMPARAÇÃO
 * 
 *  Operadores de comparação, como os seus nomes implicam, permitem que você compare dois valores. Você pode se interessar em ver as tabelas de comparação de tipos, que tem exemplo das várias comparações entre tipos relacionadas.
 * 
 * * TABELA OPERADORES DE COMPARAÇÃO
 
    EXEMPLO: $a == $b;
    NOME: Igual;
    RESULTADO: Verdadeiro (true) se $a é igual a $b.;

    EXEMPLO: $a === $b;
    NOME: IDÊNTICO;
    RESULTADO: Verdadeiro (true) se $a é igual a $b, e eles são do mesmo tipo.

    EXEMPLO: $a != $b;
    NOME: DIFERENTE;
    RESULTADO: Verdadeiro se $a não é igual a $b.

    EXEMPLO: $a <> $b;
    NOME: DIFERENTE;
    RESULTADO: Verdadeiro se $a não é igual a $b.

    EXEMPLO: $a !== $b;
    NOME: NÃO IDÊNTICO;
    RESULTADO: Verdadeiro Se $a não é igual a $b, ou eles não são do mesmo tipo (introduzido no PHP4).

    EXEMPLO: $a < $b;
    NOME: Menor que;
    RESULTADO: Verdadeiro se $a é estritamente menor que $b.;

    EXEMPLO: $a > $b;
    NOME: Maior que;
    RESULTADO: Verdadeiro se $a é estritamente maior que $b.

    EXEMPLO: $a <= $b;
    NOME: Menor ou igual;
    RESULTADO: Verdadeiro se $a é menor ou igual a $b.;

    EXEMPLO: $a >= $b;
    NOME: Maior ou igual;
    RESULTADO: Verdadeiro se $a é maior ou igual a $b.;

    EXEMPLO: $a <=> $b;
    NOME: Spaceship (nave espacial);
    RESULTADO: Um integer menor que, igual a ou maior que zero quando $a é, respectivamente, menor que, igual a ou maior que $b. Disponível a partir do PHP 7.

 * Se comparar um número com uma string ou com strings numéricas, cada string é convertido para um número e então a comparação é realizada numericamente. Essas regras também se aplicam a instrução switch. As conversões de tipo não são realizadas quando a comparação utilizada é === ou !== por esse tipo de comparação envolver valores e tipos.
 * 
*/

//string e "a" convertida para numero automaticamente
var_dump(0 == "a"); // 0 == 0 -> true
//strings "1" e "01" são convertidas para numeros inteiros e são comparadas numericamente
//"1" == 1
//"0" == 1
var_dump("1" == "01"); //1 == 1 -> true
//"10" == 10
//
var_dump("10" == "1e1"); //10 == 10 -> true
var_dump(100 == "1e2"); //100 == 100 -> true

switch("a") {
    case 0:
        echo "0";
        break;
    case "a": //nuna é alcançado porque "a" já foi combinado com 0
        echo "a";
        break;
}

//integers
//este operador encontra um integer menor que igual ou maior que zero
//$a tem que ser menor, igual ou maior que $b
//caso o resultado da comparação for menor que, igual ou maior que, respectivamente
//(-1, 0, 1) -> resultados
//-1 -> menor que
//0 -> igual que
//1 -> maior que

echo 1 <=> 1; //0 -> iguais $a == $b
echo 1 <=> 2; //-1 -> menor que $a < $b
echo 2 <=> 1; //1 -> maior que $a > $b

//Floats
echo 1.5 <=> 1.5; //0 iguais $a == $b
echo 1.5 <=> 2.5; //-1 -> menor que $a < $b
echo 2.5 <=> 1.5; //1 -> maior que $a > $b

//Strings (comparação lexicográfica) : Ordem lexicográfica
# Um byte b é menor que um byte c se o número representado por b em notação binária é menor que o número representado por c.  Por exemplo, 01000001 é menor que 01011010.
echo "a" <=> "a"; //0 -> iguais $a == $b
echo "a" <=> "b"; //-1 -> menor que $a < $b
echo "b" <=> "a"; //1 -> maior que $a > $b
echo "a" <=> "aa"; //-1 -> menor que $a < $b
echo "zz" <=> "aa"; //1 -> maior que $a > $b

//Objetos
$a = (object)["a"=>"b"];
$b = (object)["a"=>"b"];
echo $a <=> $b; //0 -> iguais $a == $b

$a = (object)["a"=>"b"];
$b = (object)["a"=>"c"];
echo $a <=> $b; //-1  menor que $a < $b

$a = (object)["a"=>"c"];
$b = (object)["a"=>"b"];
echo $a <=> $b; //1 -> maior que $a > $b

?>