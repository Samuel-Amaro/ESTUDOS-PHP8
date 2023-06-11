<?php 

/**
 * * $argv 
 * 
 *$argv — Array de argumentos passados para o script
 * 
 * DESCRIÇÃO: 
 * 
 * Contém um array de todos argumentos passados para o script quando executando através da linha de comando.
 * 
 * Nota: O primeiro argumento é sempre o nome do arquivo do script atual, portanto $argv[0] é o nome do script.
 * 
 * Nota: Esta variável está sempre disponível quando register_argc_argv está habilitada.
 * 
 * EXEMPLOS:
 * 
 * Exemplo #1 Exemplo da $argv
 * 
*/

var_dump($argv);

/**
 * Quando executando o exemplo com: php script.php arg1 arg2 arg3 
*/

?>