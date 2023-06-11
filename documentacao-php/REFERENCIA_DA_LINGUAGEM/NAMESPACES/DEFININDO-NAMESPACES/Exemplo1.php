<?php 

/**
 * * EXEMPLO #1 DECLARANDO UM SIMPLES NAMESPACE 
*/

//declarado uma namespace antes de qualquer outro tipo de codigo
namespace MyProject;

//definindo uma constante
const CONNECT_OK = 1;

//declarando uma class
class Connection{/** */}

//declarando uma função
function connect() {/** */}

/**
 * Nota : Nomes totalmente qualificados (ou seja, nomes que começam com uma barra invertida) não são permitidos em declarações de namespace, porque tais construções são interpretadas como expressões de namespace relativo.
 * 
 * A única construção de código permitida antes de uma declaração de namespace é a declare instrução, para definir a codificação de um arquivo de origem. Além disso, nenhum código não PHP pode preceder uma declaração de namespace, incluindo espaços em branco extras:
*/

?>