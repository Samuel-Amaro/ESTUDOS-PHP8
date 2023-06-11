<?php

/**
 * * INTERPRETAÇÃO DE VARIÁVEIS
 * 
 *  Quando uma string é especificada dentro de aspas duplas ou heredoc, as variáveis são interpretadas dentro delas.
 * 
 * Há dois tipos de sintaxe: uma simples e uma complexa. A sintaxe simples é a mais comum e conveniente. Provê uma maneira de interpretar uma variável, o valor de um array ou uma propriedade de objeto em uma string com o mínimo de esforço.
 * 
 * A sintaxe complexa pode ser reconhecida pelas chaves envolvendo a expressão.
 * 
 * * SINTAXE SIMPLES
 * 
 * Se um sinal de cifrão ($) for encontrado, o interpretador tentará obter tantos identificadores quantos forem possíveis para formar um nome de variável válido. Envolva o nome da variável com chaves para especificar explicitamente o fim do nome.
*/

$juice = "apple";

echo "Ela bebeu um $juice suco.".PHP_EOL;

//Inválido. "s" é um caractere válido para o nome de uma variável, mas a variável é $ juice.
//echo "Ele bebeu um suco de $juices.";

//Válido. Especifique explicitamente o final do nome da variável colocando-o entre colchetes:
echo "Ele bebeu um suco de ${juice}s.";

/**
 * Similarmente, um índice de array ou uma propriedade de um objeto podem ser interpretados. Com índices de arrays, o fechamento de colchetes (]) marca o final do índice. A mesma regra aplica-se a propriedade de objetos, assim como para variáveis simples.
 *  
*/

//Exemplo #10 exemplo com sintaxe simples

$juices = array("apple", "orange", "koolaid1" => "purple");

echo "He drank some $juices[0] juice.".PHP_EOL;
echo "He drank some $juices[1] juice.".PHP_EOL;
echo "He drank some $juices[koolaid1] juice.".PHP_EOL;

class people{
    public $john = "John Smith";
    public $jane = "Jane Smith";
    public $robert = "Robert Paulsen";

    public $smith = "Smith";
}

$people = new people();

echo "$people->john drank some $juices[0] juice.".PHP_EOL;
echo "$people->john then said hello to $people->jane.".PHP_EOL;
echo "$people->john's wife greeted $people->robert.".PHP_EOL;
#echo "$people->robert greeted the two $people->smiths."; //Não vai funcionar

//Exemplo #11 índices numéricos negativos

$string = 'string';
echo "The character at index -2 is $string[-2].",PHP_EOL;
$string[-3] = 'o';
echo "Changing the character at index -3 to o gives $string.", PHP_EOL;

?>