<?php

/**
 * * CONVERSÃO DE STRINGS PARA NÚMEROS
 * 
 *  Quando uma string é interpretada como um valor numérico, o valor resultante e seu tipo é determinado como segue.
 * 
 * Se a string não conter nenhum dos caracteres '.', 'e', ou 'E' e o valor numérico encaixa-se dentro dos limites do tipo inteiro (definido pela constante PHP_INT_MAX), a string será avaliada como um inteiro. Em todos os outros casos será interpretada como um float.
 * 
 * O valor é obtido da porção inicial da string. Se a string começar com dados numéricos válidos, esse será o valor utilizado. Caso contrário, o valor será 0 (zero). Dados numéricos válidos são um sinal opcional, seguido de um ou mais dígitos (opcionalmente contendo um ponto decimal), seguido de um expoente, também opcional. O expoente é um 'e' ou 'E' seguido de um ou mais dígitos.
*/

$foo = 1 + "10.5"; //$foo e float (11.5)
$foo = 1 + "-1.3e3"; //$foo e float(-1299);
$foo = 1 + "bob-1.3e3"; //$foo e integer(1)
$foo = 1 + "bob3"; //$foo e integer(1)
$foo = 1 + "10 Small Pigs"; //$foo e integer(11)
$foo = 4 + "10.2 Little Piggies"; //$foo e float(14.2)
$foo = "10.0 pigs" + 1; //$foo e float(11)
$foo = "10.0 pigs" + 1.0; //$foo e float(11)

/**
 * Para testar qualquer exemplo desta seção, copie-os e cole-os inserindo a linha a seguir para ver o que está acontecendo:
*/

echo "\$foo==$foo; tipo " . gettype($foo) . "<br/>\n";

?>