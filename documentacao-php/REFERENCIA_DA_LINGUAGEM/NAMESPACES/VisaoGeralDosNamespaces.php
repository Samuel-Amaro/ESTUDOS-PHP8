<?php 

/**
 * * VISÃO GERAL DOS NAMESPACES(ESPAÇO PARA NOMES)
 * 
 *  O que são namespaces? Na definição mais ampla, os namespaces são uma forma de encapsular itens. Isso pode ser visto como um conceito abstrato em muitos lugares. Por exemplo, em qualquer sistema operacional, os diretórios servem para agrupar arquivos relacionados e atuam como um namespace para os arquivos dentro deles. Como um exemplo concreto, o arquivo foo.tx tpode existir no diretório /home/greg e no /home/other, mas duas cópias de foo.txt não podem coexistir no mesmo diretório. Além disso, para acessar o foo.txt arquivo fora do /home/greg diretório, devemos acrescentar o nome do diretório ao nome do arquivo usando o separador de diretório para obter /home/greg/foo.txt. Este mesmo princípio se estende a namespaces no mundo da programação.
 * 
 * No mundo do PHP, os namespaces são projetados para resolver dois problemas que os autores de bibliotecas e aplicativos encontram ao criar elementos de código reutilizáveis, como classes ou funções:
 
    1. Colisões de nomes entre o código que você cria e classes / funções / constantes internas do PHP ou classes / funções / constantes de terceiros.

    2. Capacidade de criar um alias (ou encurtar) Extra_Long_Names projetado para aliviar o primeiro problema, melhorando a legibilidade do código-fonte.

 * 
 * Os namespaces PHP fornecem uma maneira de agrupar classes, interfaces, funções e constantes relacionadas. Aqui está um exemplo de sintaxe de namespace em PHP:
 * 
 * * EXEMPLO #1 EXEMPLO SIMPLES SINTAXE NAMESPACE
*/

namespace my\name; //consulte a seção "Definindo Namespaces"

//definição de classe
class MyClass{}
//definição de uma função
function myFunction() {}
//definição de constante
const MYCONST = 1;

//cria uma instancia de objeto da class MyClass
$a = new MyClass;

$c = new \my\Name\MyClass; //consulte a seção "Espaço Global"

$a = strlen('hi'); //consulte "Usando namespaces: fallback para global function/constante" section

$d = namespace\MYCONST; //consulte "operador de namespace e __NAMESPACE__
// seção constante "

$d = __NAMESPACE__ . "\MYCONST";

echo constant($d); //consulte a seção "Namespaces e recursos de linguagem dinâmica"

/**
 * Nota : Os nomes de namespace não diferenciam maiúsculas de minúsculas.
 * 
 * Nota: O nome do namespace PHPe os nomes compostos que começam com este nome (como PHP\Classes) são reservados para uso em linguagem interna e não devem ser usados ​​no código do espaço de usuário.
*/

?>