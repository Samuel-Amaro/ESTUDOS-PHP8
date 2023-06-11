<?php

/**
 * * CONSTANTES  
 * 
 * Uma constante é um identificador (nome) para um valor único. Como o nome sugere, esse valor não pode mudar durante a execução do script (exceto as constantes mágicas, que não são constantes de verdade). As constantes são case-sensitive por padrão. Por convenção, identificadores de constantes são sempre em maiúsculas.
 * 
 * O nome de uma constante tem as mesmas regras de qualquer rótulo do PHP. Um nome válido de constante começa com uma letra ou sublinhado, seguido por qualquer número de letras, números ou sublinhados.
 * 
 * É permitido utilizar define() em constantes com, nomes reservados ou mesmo inválidos, cujo valor pode (apenas) ser recuperado com constant(). No entanto, isso não é recomendado.
 * 
 * Exemplo #1 Nomes de constantes válidos e inválidos
*/

# Defines a named constant - define uma constante nomeada
# define( string $name , mixed $value [, bool $case_insensitive ]): bool
# define($nomeConstante, $valor);

//Nomes de constantes válidos
define("FOO", "alguma coisa");
define("FOO2", "alguma outra coisa");
define("FOO_BAR", "alguma coisa mais");

//Nomes de constantes inválidas
define("2FOO", "alguma coisa");

//Isto é valido, mas deve ser evitado:
// o PHP pode vir a fornercer uma constante mágica
//que danificará seu script
define("__FOO__", "alguma coisa");

/**
 * Como as superglobals, o escopo de uma constante é global. Você pode acessar constantes de qualquer lugar em seu script sem se preocupar com o escopo. 
*/

?>