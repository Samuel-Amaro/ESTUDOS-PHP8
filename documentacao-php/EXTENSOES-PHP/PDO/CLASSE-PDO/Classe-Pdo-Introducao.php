<?php

/**
 * * A CLASSE PDO
 * 
 * * INTRODUÇÃO
 *  
 * Representa uma conexão entre o PHP e um servidor de banco de dados.
 * 
 * SINOPSE DA CLASSE
*/

/*

class PDO{
    
    #Cria uma instância PDO que representa uma conexão a um banco de dados
    public __construct(
        string $dsn,
        ?string $username = null,
        ?string $password = null,
        ?array $options = null
    )
    
    # Inicia uma transação
    public beginTransaction(): bool
    
    # Envia uma transação
    public commit(): bool
    
    # Busca o SQLSTATE associado à última operação no identificador do banco de dados
    public errorCode(): ?string
    
    #  Busca informações de erro estendidas associadas à última operação no identificador do banco de dados
    public errorInfo(): array
    
    #Executa uma instrução SQL e retornar o número de linhas afetadas
    public exec(string $statement): int

    # Recuperar um atributo da conexão com o banco de dados
    public getAttribute(int $attribute): mixed
    
    # Retorna um array com os drivers PDO disponíveis
    public static getAvailableDrivers(): array
    
    # Verifica se está dentro de uma transação
    public inTransaction(): bool
    
    #Retorna o ID da última linha inserida ou valor de sequência
    public lastInsertId(?string $name = null): string|false

    # Prepara uma instrução para execução e retorna um objeto de instrução
    public prepare(string $query, array $options = []): PDOStatement|false

    #  Prepara e executa uma instrução SQL sem marcadores de posição
    public query(string $query, ?int $fetchMode = null): PDOStatement|false

    # Cita uma string para uso em uma consulta
    public quote(string $string, int $type = PDO::PARAM_STR): string|false

    #  Reverte uma transação
    public rollBack(): bool

    # Definir um atributo
    public setAttribute(int $attribute, mixed $value): bool
}

*/
?>