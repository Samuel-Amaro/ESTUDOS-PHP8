<?php 

/**
 * * $argc
 * 
 * $argc — O número de argumentos passados para o script
 * 
 * DESCRIÇÃO: 
 * 
 * Contém o número de argumentos passados para o atual script quando executando através da linha de comando.
 * 
 * Nota: O nome do arquivo do script é sempre passado como um argumento para o script, portanto o valor mínimo de $argc é 1.
 * 
 * Nota: Esta variável está sempre disponível quando register_argc_argv está habilitada.
 * 
 * EXEMPLOS:
 * 
 * Exemplo #1 Exemplo da $argc
 * 
 * 
*/

var_dump($argc);

/**
 * Quando executando o exemplo com: php script.php arg1 arg2 arg3
 * 
 */


?>