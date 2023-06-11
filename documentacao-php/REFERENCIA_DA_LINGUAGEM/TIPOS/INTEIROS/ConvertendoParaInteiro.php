<?php

/**
 * * CONVERTENDO PARA INTEIRO
 * 
 *  Para converter explicitamente um valor para inteiro, utiliza-se um dos modificadores (int) ou (integer). Entretanto, na maioria dos casos, o modificador não é necessário, já que o valor será automaticamente convertido se um operador, função ou estrutura de controle requerer um inteiro como argumento. Um valor também pode ser convertido para inteiro utilizando a função intval().
 * 
 * Se um recurso for convertido para um inteiro, resultará no número único do recurso, atribuído ao recurso pelo PHP em tempo de execução.
 * 
 * * DE BOOLEANOS
 * 
 * false será retornado como 0 (zero), e true retornará 1 (um).
 * 
 * * DE NÚMEROS DE PONTO FLUTUANTE
 * 
 * Conversão de números de ponto flutuante para inteiros, fará o número ser truncado.
 * 
 * Se o número convertido estiver além dos limites de um inteiro (geralmente +/- 2.15e+9 = 2^31 em plataformas 32 bit e +/- 9.22e+18 = 2^63 em plataformas 64-bit que não sejam Windows), o resultado é indefinido, por que o ponto flutuante não possui precisão suficiente para fornecer um resultado inteiro exato. Não se preocupe, pois nenhum aviso será emitido se isso acontecer!
 * 
 * Nota: A partir do PHP 7.0.0, em vez de ser um valor indefinido e que varia de acordo com a plataforma, NaN e Infinity sempre serão zero quando convertidos para inteiro.
 * 
 * * DE NULL
 * 
 * null é sempre convertido em zero (0).
*/

?>