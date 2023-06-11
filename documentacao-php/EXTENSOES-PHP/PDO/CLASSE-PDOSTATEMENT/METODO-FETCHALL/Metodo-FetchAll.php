<?php 

/**
 * * PDOStatement::fetchAll(buscar tudo)
 * 
 * PDOStatement::fetchAll - Busca as linhas restantes de um conjunto de resultados
 * 
 * * DESCRIÇÃO
 
    public PDOStatement::fetchAll(int $mode = PDO::FETCH_DEFAULT): array

    public PDOStatement::fetchAll(int $mode = PDO::FETCH_COLUMN, int $column): array

    public PDOStatement::fetchAll(int $mode = PDO::FETCH_CLASS, string $class, ?array $constructorArgs): array

    public PDOStatement::fetchAll(int $mode = PDO::FETCH_FUNC, callable $callback): array

 * 
 * PARÂMETROS
 * 
 * MODE(MODO): Controla o conteúdo da array retornada conforme documentado em PDOStatement::fetch() . O padrão é o valor PDO::ATTR_DEFAULT_FETCH_MODE (cujo padrão é PDO::FETCH_BOTH). 

 - Para retornar uma array que consiste em todos os valores de uma única coluna do conjunto de resultados, especifique PDO::FETCH_COLUMN. Você pode especificar qual coluna deseja com o column parâmetro.

  - Para buscar apenas os valores exclusivos de uma única coluna do conjunto de resultados, use OR bit a bit PDO::FETCH_COLUMN com PDO::FETCH_UNIQUE.

  - Para retornar uma array associativa agrupada pelos valores de uma coluna especificada, bit a bit-OR PDO::FETCH_COLUMN com PDO::FETCH_GROUP.

 * 
 * ARGS: Este argumento tem um significado diferente dependendo do valor do mode parâmetro.
 
  - PDO::FETCH_COLUMN: Retorna a coluna indicada com índice 0.

  - PDO::FETCH_CLASS: Retorna instâncias da classe especificada, mapeando as colunas de cada linha para propriedades nomeadas na classe.

  - PDO::FETCH_FUNC: Retorna os resultados da chamada da função especificada, usando as colunas de cada linha como parâmetros na chamada.

 * 
 * CONSTRUCTORARGS: Argumentos do construtor de classe personalizada quando o mode parâmetro é PDO::FETCH_CLASS.
 * 
 * * VALOR RETORNADO
 * 
 *  PDOStatement::fetchAll() retorna uma array contendo todas as linhas restantes no conjunto de resultados. A array representa cada linha como uma array de valores de coluna ou um objeto com propriedades correspondentes a cada nome de coluna. Uma array vazia é retornada se não houver resultados para buscar.
 * 
 * Usar este método para buscar grandes conjuntos de resultados resultará em uma grande demanda no sistema e, possivelmente, em recursos de rede. Em vez de recuperar todos os dados e manipulá-los em PHP, considere usar o servidor de banco de dados para manipular os conjuntos de resultados. Por exemplo, use as cláusulas WHERE e ORDER BY em SQL para restringir os resultados antes de recuperá-los e processá-los com PHP.
*/

?>