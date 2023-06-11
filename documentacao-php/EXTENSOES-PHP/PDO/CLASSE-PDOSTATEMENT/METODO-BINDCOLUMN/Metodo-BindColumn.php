<?php 

/**
 * * PDOStatement::bindColumn - encadernar coluna
 * 
 * PDOStatement::bindColumn - Vincula uma coluna a uma variável PHP
 * 
 * * DESCRIÇÃO:
 
    public PDOStatement::bindColumn(string|int $column, mixed &$var, int $type = PDO::PARAM_STR, int $maxLength = 0, mixed $driverOptions = null): bool

 * 
 * PDOStatement::bindColumn() organiza para ter uma variável particular ligada a uma determinada coluna no conjunto de resultados de uma consulta. Cada chamada para PDOStatement::fetch() ou PDOStatement::fetchAll() atualizará todas as variáveis ​​que estão vinculadas às colunas.
 * 
 * Nota: Como as informações sobre as colunas nem sempre estão disponíveis para o PDO até que a instrução seja executada, os aplicativos portáteis devem chamar esta função após PDOStatement::execute().
 * 
 * No entanto, para poder vincular uma coluna LOB como um fluxo ao usar o driver PgSQL, os aplicativos devem chamar este método antes de chamar PDOStatement::execute(), caso contrário, o objeto grande OID será retornado como um inteiro.
 * 
 * * PARÂMETROS
 * 
 * column: Número da coluna (indexada 1) ou nome da coluna no conjunto de resultados. Se estiver usando o nome da coluna, lembre-se de que o nome deve corresponder às maiúsculas e minúsculas da coluna, conforme retornado pelo driver.
 * 
 * var: Nome da variável PHP à qual a coluna será associada.
 * 
 * type: Tipo de dados do parâmetro, especificado pelas PDO::PARAM_* constantes.
 * 
 * maxLength: Uma dica para pré-alocação.
 * 
 * driverOptions: Parâmetro (s) opcional (is) para o driver.
 * 
 * * VALOR RETORNADO
 * 
 * Retorna true em caso de sucesso ou false em caso de falha.
*/

?>