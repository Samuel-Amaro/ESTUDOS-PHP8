<?php

/**
 * * include  
 * 
 * A declaração include inclui e avalia o arquivo informado.
 * 
 * Os arquivos são incluídos baseando-se no caminho do arquivo informado ou, se não informado, o include_path especificado. Se o arquivo não for encontrado no include_path, a declaração include checará no diretório do script que o executa e no diretório de trabalho corrente, antes de falhar. O construtor include emitirá um aviso se não localizar o arquivo; possui um comportamento diferente do construtor require, que emitirá um erro fatal.
 * 
 * Se um caminho for definido — seja absoluto (iniciando com a letra do drive ou \ no Windows, ou / no Unix/Linux ), ou relativo ao diretório atual (começando com . ou ..) — o include_path será completamente ignorado. Por exemplo, se o nome do arquivo iniciar com ../, o interpretador irá procurar pelo arquivo no diretório pai.
 * 
 * Quando um arquivo é incluído, o código herda o escopo de variáveis da da linha que a inclusão ocorrer. Qualquer variável disponível no arquivo que incluiu estará disponível no arquivo incluído, daquela linha em diante. Entretanto, todas as funções e classes definidas no arquivo incluído estarão no escopo global.
*/

//Exemplo #1 Exemplo básico do construtor include

//antes de inlcuir o arquivo com as variaveis
echo "<p>antes de dar o include no arquivo de variaveis</p>";

echo "A $color $fruit";

echo "<p>apos de dar o include no arquivo de variaveis</p>";

include "vars.php";

echo "A $cor $fruta <br>";

/**
 * Se a inclusão ocorrer dentro de uma função todo o código contido no arquivo incluído irá se comportar como se tivesse sido definido dentro da função. Portanto seguirá o escopo de variáveis da função. Uma exceção para essa regra são as constantes mágicas que são interpretadas antes da inclusão ocorrer.
 * 
 *  
*/

//Exemplo #2 Inclusão em funções
function foo() {
    global $cor;
    include 'vars.php';
    echo "A $cor $fruta <br>";
}

/*vars.php está no escopo de foo () então *
* $ fruit NÃO está disponível fora deste *
* alcance. $ color é porque nós o declaramos *
* como global.*/

foo(); //A verde maçã

echo "A $cor $fruta <br>";

/**
 * Quando um arquivo é incluído, o interpretador sai do modo PHP e entra no modo HTML no começo do arquivo incluído, e volta novamente no final. Por esta razão, qualquer código dentro do arquivo incluído que necessite ser executado como PHP deve estar entre tags válidas de início e fim do PHP.
 * 
 *  Se os "empacotadores de inclusão de URL" estiverem habilitados no PHP, pode-se definir um arquivo a ser incluído usando uma URL (via HTTP ou outro protocolo suportado - veja Protocolos e Wrappers suportados para uma lista de protocolos) ao invés de um caminho local. Se o servidor de destino interpretar o arquivo incluído como PHP, variáveis podem ser passadas para o arquivo incluído usando uma URL de requisição com HTTP GET. Isso não significa a mesma coisa que incluir e compartilhar o escopo de variáveis com o arquivo incluído; O script é executado no servidor remoto e o resultado incluído no script local.
*/

//Exemplo #3 Usando include via HTTP

/*
    * Este exemplo assume que www.example.com está configurado para analisar .php
    * arquivos e não arquivos .txt. Além disso, 'Funciona' aqui significa que as variáveis
    * $ foo e $ bar estão disponíveis no arquivo incluído.
*/

//Não vai funcionar; arquivo.txt não foi tratado por www.example.com como PHP

//include 'http://www.example.com/file.txt?foo=1&bar=2';

//Não vai funcionar; procura por um arquivo chamado 'file.php? foo = 1 & bar = 2' no
// sistema de arquivos local.
//include 'file.php?foo=1&bar=2';

//trabalho
// 'http://www.example.com/file.php?foo=1&bar=2';

//$foo = 1;
//$bar = 2;

//include 'file.txt'; //trabalho
//include 'file.php'; //trabalho

//Pelo fato do include ser um construtor especial da linguagem, parênteses não são necessários ao redor do argumento. Tome cuidado ao comparar valores de retorno.

//Exemplo #4 Comparando valores de retorno do include

//não funcionará, avaliado como include (('vars.php') == TRUE), ou seja, include ('')

if(include('vars.php') == TRUE) {
    echo 'OK <br/>';
}

//trabalho
if((include 'vars.php') == TRUE) {
    echo 'Ok <br/>';
}

//Exemplo #5 include e a instrução return

$foo = include 'return.php';

echo $foo . "<br/>"; //prints 'PHP'

$bar = include 'noreturn.php';

echo $bar . "<br/>"; //prints 1

/**
 * $bar tem o valor 1 porque a inclusão foi bem sucedida. Note a diferença entre os dois exemplos. O primeiro usa o return, enquanto o outro não. Se o arquivo não puder ser incluído, false é retornado e um E_WARNING emitido.
 * 
 *  Se funções forem definidas no arquivo incluído, elas podem ser utilizadas no arquivo principal independente se estão antes ou depois do return. Se o mesmo arquivo for incluído duas vezes, o PHP 5 emitirá um erro fatal, pois as funções já foram declaradas, enquanto que no PHP 4 não se queixa de funções definidas depois do return. É recomendado usar o include_once ao invés de verificar se o arquivo já foi incluído manualmente dentro do arquivo incluído.
*/
?>