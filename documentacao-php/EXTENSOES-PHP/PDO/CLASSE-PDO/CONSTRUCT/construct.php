<?php

/**
 * * PDO::__CONSTRUCT
 * 
 *  PDO :: __ construct - Cria uma instância PDO que representa uma conexão com um banco de dados
 * 
 * * DESCRIÇÃO:

    public PDO::__construct(
        string $dsn,
        ?string $username = null,
        ?string $password = null,
        ?array $options = null
    )

 * 
 * Cria uma instância PDO para representar uma conexão com o banco de dados solicitado
 * 
 * * PARÂMETROS
 * 
 * DSN: O nome da fonte de dados, ou DSN, contém as informações necessárias para se conectar ao banco de dados.
 
  - Em geral, um DSN consiste no nome do driver PDO, seguido por dois pontos, seguido pela sintaxe de conexão específica do driver PDO.

  - O dsn parâmetro oferece suporte a três métodos diferentes de especificação dos argumentos necessários para criar uma conexão de banco de dados:

    - Invocação de driver: dsn contém o DSN completo.

    - Invocação de URI: dsn consiste em uri seguido por um URI que define a localização de um arquivo que contém a string DSN. O URI pode especificar um arquivo local ou um URL remoto. 

       uri:file:///path/to/dsnfile

    - Aliasing: dsn consiste em um nome name que mapeia em php.ini definindo a string DSN. pdo.dsn.name

      Nota: O alias deve ser definido em php.ini , e não em .htaccess ou httpd.conf
    
 * 
 * username: O nome de usuário da string DSN. Este parâmetro é opcional para alguns drivers PDO.
 * 
 * passwd: A senha para a string DSN. Este parâmetro é opcional para alguns drivers PDO.
 * 
 * options: Uma Array de chave => valor de opções de conexão específicas do driver.
 *  
 * * VALOR RETORNADO
 * 
 * Retorna um objeto PDO em caso de sucesso.
 * 
 * * ERROS
 * 
 * PDO::__ construct() lança uma PDOException se a tentativa de conexão com o banco de dados solicitado falhar, independentemente de qual PDO::ATTR_ERRMODE está definido no momento.
*/

?>