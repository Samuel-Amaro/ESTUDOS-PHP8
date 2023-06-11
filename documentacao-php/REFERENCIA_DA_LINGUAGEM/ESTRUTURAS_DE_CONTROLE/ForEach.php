<?php

/**
 * * FOR EACH
 *  O construtor foreach fornece uma maneira fácil de iterar sobre arrays. O foreach funciona somente em arrays e objetos, e emitirá um erro ao tentar usá-lo em uma variável com um tipo de dado diferente ou em uma variável não inicializada. Possui duas sintaxes:
*/

/*

foreach(array_expression as $value)
    statement
foreach(array_expression as $key => $value)
    statement

*/

/**
 * A primeira forma, itera sobre arrays informados na array_expression. A cada iteração, o valor do elemento atual é atribuído a $value e o ponteiro interno do array avança uma posição (então, na próxima iteração, se estará olhando para o próximo elemento).
 * 
 * A segunda forma var, adicionalmente, atribuir a chave do elemento corrente a variável $key a cada iteração.
*/

/**
 * Para modificar diretamente elementos de um array dentro de um laço, preceda $value com &. Neste caso, o valor será atribuído por referência. 
*/

$array = array(1, 2, 3, 4);

echo "antes de modificar o item do array por referencia. <br>";

foreach($array as $valor) {
    echo $valor . "<br>";
}

echo "apos modificar cada item do array por referencia. <br>";

//esse for each modifica os itens do array por referencia, obtem a referencia dos itens a cada iteração e consegue atribuir um novo valor usando o opera &
foreach($array as &$valor) {
    $valor = $valor * 2;
    echo $valor . "<br>";
}


//$array e um novo array(2, 4, 6, 8);
unset($valor);  // quebra a referência com o último 

/**
 * A referência ao $valor e o último elemento do array permanecerá inalterado mesmo após a iteração do foreach. É recomendado destruí-lo utilizando a função unset(). 
*/

/**
 * Mais alguns exemplos para demonstrar o uso: 
*/

//exemplo 1: somente valor

echo "<h1> Exemplo 1 </h1>";

$a = array(1, 2, 3, 17);

foreach($a as $valor) {
    echo "Valor atual de \$a: $valor. <br>";
}

//exemplo 2: valor (com sua notação de acesso manual impressa para ilustração)

echo "<h2> Exemplo 2 </h2>";

$i = 0; //apenas para fins ilustrativos

foreach($a as $valor) {
    echo "\$a[$i] => $valor <br>";
    $i++;
}

//exemplo 3: chave e valor

echo "<h3> Exemplo 3 </h3>";

$arrayTeste = array(
                    "um" => 1,
                    "dois" => 2,
                    "três" => 3,
                    "dezessete" => 17
);

foreach($arrayTeste as $chave => $valor) {
    echo "\$arrayTeste[$chave] => $valor. <br>";
}

//exemplo 4: arrays multidimensionais

echo "<h4> Exemplo 4 </h4>";

$arrayMultidimensional = array();
$arrayMultidimensional[0][0] = "a";
$arrayMultidimensional[0][1] = "b";
$arrayMultidimensional[1][2] = "y";
$arrayMultidimensional[1][1] = "z";

//acessa linha
foreach($arrayMultidimensional as $linha) {
    //acessa coluna(celula com o respectivo valor)
    foreach($linha as $coluna) {
        echo "$coluna <br>";
    }
}

//exemplo 5: arrays dinâmicos

echo "<h5>Exemplo 5 </h5>";

foreach(Array(1, 2, 3, 4, 5) as $item) {
    echo "$item <br>";
}

/**
 * * DESEMPACOTANDO ARRAYS ANINHANDOS COM O CONSTRUTOR list()
 * 
 *  O PHP 5.5 adicionou a habilidade de iterar sobre array de arrays e desempacotar arrays aninhados em variáveis do laço fornecendo o construtor list() como valor.
*/

//exemplo

echo "<h3> exemplo </h3>";

$array = [
            [1, 2],
            [3, 4],
];

foreach($array as list($a, $b)) {
        //$ a contém o primeiro elemento da array aninhada
        //e $ b contém o segundo elemento
        echo "A: $a; B: $b <br>";
}

/**
 * Pode-se se fornecer menos elementos ao construtor list() aos que existem no array aninhado, neste caso, os valores do array que sobrarem serão ignorados.
 *  
*/

echo "<h3> exemplo </h3>";

foreach($array as list($a)) {
    //Observe que não há $ b aqui.
    echo "$a <br>";
}

/**
 * Um aviso será gerado se não houver elementos suficientes no array para o preenchimento do construtor list(): 
*/

echo "<h3> exemplo </h3>";

foreach ($array as list($a, $b, $c)) {
    echo "A: $a; B: $b; C: $c\n";
}

?>