<?php

/**
 * * EXCEÇÕES
 * 
 *  O PHP possui um modelo de exceções similar ao de outras linguagens de programação. Uma exceção pode ser lançada (throw) e capturada (catch). Código pode ser envolvido por um bloco try para facilitar a captura de exceções potenciais. Cada bloco try precisa ter ao menos um bloco catch ou finally correspondente.
 * 
 * O objeto lançado precisa ser uma instância da classe Exception ou uma subclasse de Exception. Tentar lançar um objeto sem essa ascendência resultará em um erro fatal.
 * 
 * * CATCH(CAPTURA)
 * 
 * Múltiplos blocos catch podem ser utilizados para capturar exceções diferentes. A execução normal (quando nenhuma exceção é lançada dentro de um try) irão continuar a execução após o último catch definido em sequência. Exceções podem ser lançadas (ou relançadas) dentro um bloco catch.
 * 
 * Quando uma exceção é lançada o código seguinte não é executado, e o PHP tentará encontrar o primeiro bloco catch coincidente. Se uma exceção não for capturada, um erro PHP fatal será lançado com a mensagem "Uncaught Exception ..." na ausência de uma função definida com set_exception_handler().
 * 
 * A partir do PHP 7.1 um bloco catch pode especificar múltiplas exceções usando o caractere pipe (|). Isto é útil quando diferentes exceções de diferentes hierarquias de classes são tratadas da mesma forma.
 * 
 * * FINALLY
 * 
 * A partir do PHP 5.5, um bloco finally pode ser especificado após ou no lugar de blocos catch. Códigos dentro de finally sempre serão executados depois do try ou catch, independente se houve o lançamento de uma exceção, e antes que a execução normal continue.
*/


?>