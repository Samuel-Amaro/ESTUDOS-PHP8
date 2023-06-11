<?php

/**
 * * OPERADORES ARITMÉTICOS
 * 
 * Lembra-se da aritmética básica da escola? Estes operadores funcionam exatamente como aqueles.
 
  Exemplo: +$a 
  nome: identidade;
  resultado: Conversão de $a para int ou float conforme apropriado;

  Exemplo: -$a;
  nome: Negação;
  resultado: Oposto de $a;

  Exemplo: $a + $b;
  nome: Adição;
  resultado: Soma de $a e $b;

  Exemplo: $a - $b;
  nome: Subtração;
  resultado: Diferença entre $a e $b.;

  Exemplo: $a * $b;
  nome: Multiplicação;
  resultado: Produto de $a e $b.

  Exemplo: $a / $b;
  nome: Divisão;
  resultado: Quociente de $a e $b;

  Exemplo: $a % $b;
  nome: Módulo;
  resultado: Resto de $a dividido por $b;

  Exemplo: $a ** $b;
  nome: Exponencial;
  resultado: Resultado de $a elevado a $b. Introduzido no PHP 5.6.

 * 
 * O operador de divisão ("/") sempre retorna um valor com ponto flutuante, a não ser que os dois operandos sejam inteiros (ou strings que são convertidas para inteiros) e números inteiramente divisíveis, nesse caso um inteiro é retornado.
 * 
 * Operandos de módulo são convertidos para inteiros (removendo a parte decimal) antes do processamento. 
 * 
 * O resultado do operador de módulo % tem o mesmo sinal do dividendo — ou seja, o resultado de $a % $b terá o mesmo sinal de $a. Exemplos:
*/

echo (5 % 3) . "\n"; //imprime 2
echo (5 % -3) . "\n"; //imprime 2
echo (-5 % 3) . "\n"; //imprime -2
echo (-5 % -3) . "\n"; //imprime -2





?>