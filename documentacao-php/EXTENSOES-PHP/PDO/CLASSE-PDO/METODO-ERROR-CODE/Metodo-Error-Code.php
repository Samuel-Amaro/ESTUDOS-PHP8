<?php

/**
 * * PDO::ERRORCODE(Erro de código) 
 * 
 * PDO::errorCode - Obtém o SQLSTATE associado à última operação no identificador do banco de dados
 * 
 * * DESCRIÇÃO
 
    public PDO::errorCode(): ?string

 * 
 * * PARÂMETROS
 * 
 * Esta função não possui parâmetros.
 * 
 * * VALOR RETORNADO
 * 
 * Retorna um SQLSTATE, um identificador alfanumérico de cinco caracteres definido no padrão ANSI SQL-92. Resumidamente, um SQLSTATE consiste em um valor de classe de dois caracteres seguido por um valor de subclasse de três caracteres. Um valor de classe de 01 indica um aviso e é acompanhado por um código de retorno de SQL_SUCCESS_WITH_INFO. Valores de classe diferentes de '01', exceto para a classe 'IM', indicam um erro. A classe 'IM' é específica para avisos e erros derivados da implementação do PDO (ou talvez ODBC, se você estiver usando o driver ODBC). O valor da subclasse '000' em qualquer classe indica que não há subclasse para esse SQLSTATE.
 * 
 * PDO::errorCode() apenas recupera códigos de erro para operações realizadas diretamente no identificador do banco de dados. Se você criar um objeto PDOStatement por meio de PDO::prepare() ou PDO::query() e invocar um erro no identificador de instrução, PDO::errorCode() não refletirá esse erro. Você deve chamar PDOStatement::errorCode() para retornar o código de erro para uma operação executada em um identificador de instrução específico.
 * 
 * Retorna null se nenhuma operação foi executada no identificador do banco de dados.
*/

?>