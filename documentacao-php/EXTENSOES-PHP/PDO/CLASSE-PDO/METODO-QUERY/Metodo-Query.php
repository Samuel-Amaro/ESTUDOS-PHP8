<?php

/**
 * * PDO::QUERY(CONSULTA)
 * 
 *  PDO :: query - Prepara e executa uma instrução SQL sem marcadores de posição
 * 
 * * DESCRIÇÃO
 
  - public PDO::query(string $query, ?int $fetchMode = null): PDOStatement|false

  - public PDO::query(string $query, ?int $fetchMode = PDO::FETCH_COLUMN, int $colno): PDOStatement|false

  - public PDO::query(
        string $query,
        ?int $fetchMode = PDO::FETCH_CLASS,
        string $classname,
        array $constructorArgs
    ): PDOStatement|false

   - public PDO::query(string $query, ?int $fetchMode = PDO::FETCH_INTO, object $object): PDOStatement|false

 * 
 * PDO::query() prepara e executa uma instrução SQL em uma única chamada de função, retornando a instrução como um objeto PDOStatement.
 * 
 * Para uma consulta que precisa ser emitida várias vezes, você obterá um melhor desempenho se preparar um objeto PDOStatement usando PDO::prepare() e emitir a instrução com várias chamadas para PDOStatement:: execute().
 * 
 * Se você não buscar todos os dados em um conjunto de resultados antes de emitir sua próxima chamada para PDO::query() , sua chamada pode falhar. Chame PDOStatement::closeCursor() para liberar os recursos de banco de dados associados ao objeto PDOStatement antes de emitir sua próxima chamada para PDO::query().
 * 
 * Nota: Se o query contém marcadores de posição, a instrução deve ser preparada e executada separadamente usando os métodos PDO::prepare() e PDOStatement::execute().
 * 
 * * PARÂMETROS
 * 
 * query(consulta): A instrução SQL para preparar e executar. Se o SQL contiver espaços reservados, PDO::prepare() e PDOStatement::execute() devem ser usados ​​em seu lugar. Alternativamente, o SQL pode ser preparado manualmente antes de chamar PDO::query() , com os dados devidamente formatados usando PDO::quote() se o driver suportar.
 * 
 * fetchMode(modo de busca): O modo de busca padrão para o PDOStatement retornado. Deve ser uma das PDO::FETCH_*constantes. Se este argumento for passado para a função, os argumentos restantes serão tratados como se PDOStatement::setFetchMode() fosse chamado no objeto de instrução resultante. Os argumentos subsequentes variam dependendo do modo de busca selecionado.
 * 
 * * VALOR RETORNADO:
 * 
 * Returns a PDOStatement object ou false em caso de falha.
*/

?>