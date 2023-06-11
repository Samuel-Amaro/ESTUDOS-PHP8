<?php 

/**
 * * OPERADORES DE ARRAYS
 * 

    EXEMPLO: $a + $b;
    NOME: UNIÃO;
    RESULTADO: União de $a e $b.

    EXEMPLO: $a == $b;
    NOME: IGUALDADE;
    RESULTADO: true se $a e $b tem os mesmos pares de chave/valor.

    EXEMPLO: $a === $b;
    NOME: Identidade;
    RESULTADO: true se $a e $b tem os mesmos pares de chave/valor na mesma ordem e do mesmo tipo.

    EXEMPLO: $a != $b;
    NOME: Desigualdade;
    RESULTADO: true se $a não é igual a $b;

    EXEMPLO: $a <br> $b;
    NOME: Desigualdade;
    RESULTADO: true se $a não é igual a $b.;

    EXEMPLO: $a !== $b;
    NOME: NÃO IDENTIDADE;
    RESULTADO: true se $a não é identico a $b.;

 * 
 * O operador + retorna o array à direta anexado ao array da esquerda. Para chaves que existam nos dois arrays os elementos do array à esquerda serão mantidos, os valores de mesma chave no array da direita são ignorados.
*/

//var_dump — Mostra informações sobre a variável
//var_dump ( mixed $expression , mixed $expression = ? , $... = ? ) : void

//um array com 2 elementos, elemento e identificado por chave e valor
$a = array("a" => "maçã", "b" => "banana");
//um array com 3 elementos, elemento e identificado por chave e valor
$b = array("a" => "pêra", "b" => "framboesa", "c" => "morango");

//Usando operador de $a + $b(União)
//retorna o array da direta anexado ao array da esquerda
//uni o array $b ao array $a, as chaves iguais que possui nos dois arrays fircarão assim: 
//as chaves do array $a serão mantidas, as chaves que são iguais ao do array $b, e as chaves iguais do array $b serão ignoradas.
//e se caso o array $b tem mais elementos que o array $a, os elementos do array $b vão vara o array $a
$c = $a + $b; //União de $a + $b
echo "União de  \$a e \$b: </br>";
var_dump($c);
echo "</br>";

//União de $b e $a
//uni o array $a ao array $b
//as chaves existentes nos dois arrays so serão mantidas as chaves do array $b, as chavs do array  $a que são iguais a do array $b serão ignoradas
//e se caso o array $b tem mais elementos que o array $a, os elementos do array $b continuar e os do elemento $a vão ser anexados ao array $b
$c = $b + $a; 
echo "União de \$b e \$a: </br>";
var_dump($c);
echo "</br>";

//União de $a += $b é $a e $b
//e o mesmo que $a = $a + $b;
//uni o array $b ao array $a
//as chaves iguais nos dois arrays que possui nos dois arrays, ficarão assim, as chaves iguais do array $a serão mantidas, e as chaves iguais do array $b serão ignoradas.
$a += $b;
echo "União de \$a += \$b: \n </br>";
var_dump($a);
echo "</br>";

/**
 * Elementos do array são iguais para efeitos de comparação se eles possuem o mesmo valor e chave. 
*/

//Exemplo #1 Comparando arrays

//um array com dois elementos, sem chaves para identificar elementos
//e um array indexado, sem chaves
$a1 = array("maçã", "banana");

//um array com dois elementos, cada elemento identificado por chave e valor
$b1 = array(1 => "banana", "0" => "maçã");

echo "os arrays possuim mesmos pares de chave e valor: \$a1 == \$b1: "; 
var_dump($a1 == $b1); //bool(true)
echo "</br>";
echo "os arrays possuim mesmos pares de chave e valor, do mesmo tipo e na mesma ordem: \$a1 === \$b1: ";
var_dump($a1 === $b1);//bool(false)

?>