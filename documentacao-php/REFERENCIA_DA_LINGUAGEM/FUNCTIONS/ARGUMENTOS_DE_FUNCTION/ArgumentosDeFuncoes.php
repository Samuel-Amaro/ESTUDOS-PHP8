<?php

/**
 * * ARGUMENTOS DE FUNÇÕES
 * 
 *  Informações podem ser passadas para funções através da lista de argumentos, que é uma lista de expressões delimitados por vírgulas. Os argumentos são avaliados da esquerda para a direita.
 * 
 * O PHP suporta a passagem de argumentos por valor (o padrão), passagem por referência, e valores padrões de argumentos. lista de argumentos de tamanho variável e argumentos nomeados também são suportadas.
*/

//Passando arrays para funções

function leva_array($input) {
    echo "$input[0] + $input[1] = ", $input[0] + $input[1];
}

/**
 * A partir do PHP 8.0.0, a lista de argumentos de uma função pode incluir uma vírgula final, que será ignorada. Isto é particularmente útil nos casos que a quantidade de argumentos é longa ou contém nomes longos, sendo conveniente listar os argumentos verticalmente. 
*/

function leva_muitos_argumentos($primeiro, $segundo, $uma_variavel_com_nome_longo, $parametro_com_default = 5, $de_novo = 'argumento padrão', //essa virgula final não era permitida antes do PHP 8.0.0
)
{
    //....
}

/**
 * A partir do PHP 8.0.0, passar argumentos mandatórios após argumentos opcionais é obsoleto. Isso geralmente pode ser resolvido através da eliminação dos argumentos opcionais. Uma exceção são os argumentos na forma Tipo $param = null, onde o null padrão torna o tipo implicitamente nullable. Esta forma permanece permitida, entretanto é recomendável um tipo explicitamente nullable nesses casos.
*/

//Exemplo #3 Passando argumentos opcionais depois de argumentos obrigatórios

function foo($a = [], $b) {} //antes
function foo($a, $b) {} //depois

function bar(A $a = null, $b) {} //ainda permitido
function bar(?A $a, $b) {} //recomendado



?>