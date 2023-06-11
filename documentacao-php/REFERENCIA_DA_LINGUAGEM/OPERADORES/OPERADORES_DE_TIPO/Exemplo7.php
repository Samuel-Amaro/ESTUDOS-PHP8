<?php 

/**
 * * OPERADORES DE TIPO
 * 
 * Há algumas detalhes para estar ciente. Antes do PHP 5.1.0, instanceof podia chamar __autoload() quando o nome da classe não existe. Em adicional, se a classe não foi carregada, um erro fatal poderia ocorrer. Isto pode funcionar usando a dynamic class reference, ou uma variável string contendo o nome da classe:
 * 
 *  Exemplo #7 Evitando que o nome da classe seje verificado e fatal erros com instanceof no PHP 5.0
 * 
*/

$d = 'NotMyClass';
//bool(false)
var_dump($a instanceof $d); //Não causa erro fatal



?>