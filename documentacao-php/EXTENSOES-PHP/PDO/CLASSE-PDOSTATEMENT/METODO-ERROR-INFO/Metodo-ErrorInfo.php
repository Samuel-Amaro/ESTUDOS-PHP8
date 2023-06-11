<?php 

/**
 * * PDOStatement::errorInfo
 *  
 * PDOStatement::errorInfo - Busca informações de erro estendidas associadas à última operação no identificador de instrução
 * 
 * * DESCRIÇÃO
 * 
 * public PDOStatement::errorInfo(): array
 * 
 * * PARÂMETROS
 * 
 * Esta função não possui parâmetros.
 * 
 * * VALOR RETORNADO
 * 
 * PDOStatement::errorInfo() retorna uma array de informações de erro sobre a última operação executada por este identificador de instrução. A array consiste em pelo menos os seguintes campos:
 
  elemento: 0;
  em formação: Código de erro SQLSTATE (um identificador alfanumérico de cinco caracteres definido no padrão ANSI SQL).

  elemento: 1;
  em formação: Código de erro específico do driver;

  elemento: 2;
  em formação: Mensagem de erro específica do driver.

 * 
 * EXEMPLOS
 * 
*/

?>