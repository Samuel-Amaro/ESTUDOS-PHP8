<?php

/**
 * * PDO::errorInfo
 * 
 *  PDO::errorInfo - Busca informações de erro estendidas associadas à última operação no identificador do banco de dados
 * 
 * * DESCRIÇÃO
 
  public PDO::errorInfo() : array

 * 
 * * PARÂMETROS
 * 
 * Esta função não possui parâmetros.
 * 
 * * VALOR RETORNADO:
 * 
 * PDO::errorInfo() retorna uma array de informações de erro sobre a última operação executada por este identificador de banco de dados. A array consiste em pelo menos os seguintes campos:
 
  ELEMENTO INDEXADO DO ARRAY: 0;
  EM FORMAÇÃO: Código de erro SQLSTATE (um identificador alfanumérico de cinco caracteres definido no padrão ANSI SQL).

  ELEMEENTO INDEXADO DO ARRAY: 1;
  EM FORMAÇÃO: Código de erro específico do driver;

  ELEMENTO INDEXADO DO ARRAY: 2;
  EM FORMAÇÃO: Mensagem de erro específica do driver;

 * 
 * Se o código de erro SQLSTATE não for definido ou não houver nenhum erro específico do driver, os elementos após o elemento 0 serão definidos como null.
 * 
 * PDO::errorInfo() só recupera informações de erro para operações realizadas diretamente no identificador do banco de dados. Se você criar um objeto PDOStatement por meio de PDO::prepare() ou PDO::query() e invocar um erro no identificador de instrução, PDO::errorInfo() não refletirá o erro do identificador de instrução. Você deve chamar PDOStatement::errorInfo() para retornar as informações de erro para uma operação executada em um identificador de instrução específico.
 * 
*/
?>