<?php

/**
 * * PDO::setAttribute
 * 
 * PDO::setAttribute - Definir um atributo
 * 
 * * DESCRIÇÃO
 
    public PDO::setAttribute(int $attribute, mixed $value) : bool

 * 
 * Define um atributo no identificador do banco de dados. Alguns dos atributos genéricos disponíveis estão listados abaixo; alguns drivers podem fazer uso de atributos específicos de driver adicionais.
 
  - PDO::ATTR_CASE(atributo): Força os nomes das colunas para um caso específico.

    - PDO::CASE_LOWER(valor): Força os nomes das colunas a minúsculas.

    - PDO::CASE_NATURAL(valor): Deixe os nomes das colunas conforme retornados pelo driver do banco de dados.

    - PDO::CASE_UPPER(Valor): Força os nomes das colunas a maiúsculas.

  - PDO::ATTR_ERRMODE(atributo): Relatório de erros.

    - PDO::ERRMODE_SILENT(Valor): Basta definir os códigos de erro.

    - PDO::ERRMODE_WARNING(Valor): Levante E_WARNING.

    - PDO::ERRMODE_EXCEPTION(valor): Lance exceções.

  - PDO::ATTR_ORACLE_NULLS(atributo) (disponível com todos os drivers, não apenas Oracle): Conversão de strings NULL e vazias.

     - PDO::NULL_NATURAL(valor): No conversion.

     - PDO::NULL_EMPTY_STRING(valor): String vazia é convertida em null.

     - PDO::NULL_TO_STRING(valor): NULL é convertido em uma string vazia.

  - PDO::ATTR_STRINGIFY_FETCHES(atributo): Converta valores numéricos em strings ao buscar. Requer bool(valor).

  - PDO::ATTR_STATEMENT_CLASS(atributo): Defina a classe de instrução fornecida pelo usuário derivada de PDOStatement. Não pode ser usado com instâncias PDO persistentes. Requer array(string classname, array(mixed constructor_args)(valor)).

  - PDO::ATTR_TIMEOUT(atributo): Especifica a duração do tempo limite em segundos. Nem todos os drivers suportam essa opção e seu significado pode variar de driver para driver. Por exemplo, o sqlite aguardará até esse valor de tempo antes de desistir de obter um bloqueio gravável, mas outros drivers podem interpretar isso como um intervalo de tempo limite de conexão ou leitura. Requer int(Valor).

  - PDO::ATTR_AUTOCOMMIT(atributo e valor)(disponível em OCI, Firebird e MySQL): Se a autocommit cada instrução individual.

  - PDO::ATTR_EMULATE_PREPARES(atributo) Habilita ou desabilita a emulação de instruções preparadas. Alguns drivers não oferecem suporte a instruções preparadas nativas ou têm suporte limitado para eles. Use esta configuração para forçar o PDO a sempre emular instruções preparadas (if true e preparações emuladas são suportadas pelo driver) ou para tentar usar instruções preparadas nativas (if false). Sempre voltará a emular a instrução preparada se o driver não puder preparar com êxito a consulta atual. Requer bool(valor).

  - PDO::MYSQL_ATTR_USE_BUFFERED_QUERY(atributo e valor)(disponível em MySQL): Use consultas em buffer.

  - PDO::ATTR_DEFAULT_FETCH_MODE(atributo): Define o modo de busca padrão. A descrição dos modos está disponível na documentação do PDOStatement::fetch()(valor).

 * 
 * * VALOR RETORNADO
 * 
 * Retorna true em caso de sucesso ou false em caso de falha.
*/

?>