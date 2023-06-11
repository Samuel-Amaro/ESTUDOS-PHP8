<?php

/**
 * * ESCOPO DE VARIÁVEIS
 * 
 *  O escopo de uma variável é o contexto onde foi definida. A maioria das variáveis do PHP tem somente escopo local. Este escopo local inclui os arquivos incluídos e requeridos. Por exemplo:
*/

$a = 1;
include 'b.inc';

/**
 *  Aqui a variável $a estará disponível no script incluído b.inc. Entretanto, nas funções definidas pelo usuário, um escopo local é introduzido. Qualquer variável utilizada dentro de uma função é, por padrão, limitada ao escopo local da função. Por exemplo:
*/

//escopo global
$a = 1;

function Teste() {
    echo $a; /*referencia uma variavel do escopo local(não definida)*/
}

Teste();

/**
 * Este script não produz nenhuma saída porque a instrução echo refere-se a uma versão local da variável $a, e não possui nenhum valor atribuído neste escopo. Pode-se perceber que esta é uma pequena diferença em relação a linguagem C, em que variáveis globais estão automaticamente disponíveis para funções sem sobrescrever uma definição local. Isto pode causar problemas quando inadvertidamente modificar-se uma variável global. No PHP, as variáveis globais precisam ser declaradas como globais dentro de uma função, se for utilizada em uma. 
*/

?>