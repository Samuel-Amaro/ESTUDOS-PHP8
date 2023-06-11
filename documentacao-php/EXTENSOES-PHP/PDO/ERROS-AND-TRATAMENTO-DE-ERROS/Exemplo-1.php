<?php

/**
 * * EXEMPLO #1 CRIE UMA INSTÂNCIA PDO E DEFINA O MODO DE ERRO
 * 
 *  
*/

//se caso de um erro ao estabelecer conexão com o postgres,
//capture o erro de exceção um PDOException com o catch

try {
    //estabelecendo uma conexão ao criar uma instancia da classe PDO, independente do drive que for usar
    //a origem do banco de dados e conhecida pelo DSN, e nome de usuario e senha

    $usuario = "postgres";
    $senha = "123";
    $origemDsn = "pgsql: ";
    $host = "host=localhost;"; //pode ser um endereço ip se tiver hospedagem ou dominio
    $nomeDataBase = "dbname= db_dvd_rental;";
    $port = "port=5432;";

    //cria uma instancia de PDO para conexão com PostGresSQL
    $dbh = new PDO($origemDsn . " "  . $host . $port . $nomeDataBase, $usuario, $senha);                                       

    //PDOStatement::setAttribute — Define um atributo na instrução
    //Define um atributo na instrução. Atualmente não há atributos genericos definidos, apenas atributos específicos do driver:
    #ATRIBUTO
    //PDO::ATTR_ERRMODE: Relatório de erros
    #VALOR DO ATRIBUTO
    // PDO::ERRMODE_EXCEPTION: A partir do PHP 8.0.0, este é o modo padrão. Além de definir o código de erro, o PDO lançará uma PDOException e definirá suas propriedades para refletir o código de erro e as informações de erro. 

    //seta atributo de erro no objeto PDO
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //fecha uma conexão que esta ativa no objeto pdo, null em todas referencias, e no objeto PDOStatment também, que manipula as consultas preparadas 
    $dbh = null;
    $stmt = null;

} catch (PDOException $e) {
    print "Error Conexão falhou!: <pre><code>" . $e->getMessage() . "</code></pre>";
    //sair do script
    die();
}

/**
 * Nota: PDO :: __ construct() sempre lançará uma PDOException se a conexão falhar, independentemente de qual PDO::ATTR_ERRMODE está configurada no momento. Exceções não detectadas são fatais.  
*/

?>