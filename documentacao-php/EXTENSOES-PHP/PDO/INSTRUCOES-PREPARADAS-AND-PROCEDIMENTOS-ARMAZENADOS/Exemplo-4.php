<?php

/**
 * * EXEMPLO #4 CHAMANDO UM PROCEDIMENTO ARMAZENADO COM UM PARÂMETRO DE SAIDA
 * 
 * Se o driver de banco de dados suportar, um aplicativo também pode vincular parâmetros para saída e entrada. Os parâmetros de saída são normalmente usados ​​para recuperar valores de procedimentos armazenados. Os parâmetros de saída são um pouco mais complexos de usar do que os parâmetros de entrada, em que um desenvolvedor deve saber o quão grande um determinado parâmetro pode ser ao vinculá-lo. Se o valor acabar sendo maior do que o tamanho que eles sugeriram, um erro será gerado.
 * 
*/

//PARA ESTE EXEMPLO NÃO TEMOS UMA PROCEDURE CRIADA COM UM PARAMENTRO DE SAIDA, VAMOS SEGUIR OQUE O TUTORIAL PROPOE, SEM ADAPTAR PARA NOSSO EXEMPLO

//se caso de um erro ao estabelecer conexão com o MYSQL,
//capture o erro de exceção um PDOException com o catch

try {
    //estabelecendo uma conexão ao criar uma instancia da classe PDO, independente do drive que for usar
    //a origem do banco de dados e conhecida pelo DSN, e nome de usuario e senha

    $usuario = "postgres";
    $senha = "123";
    $origemDsn = "pgsql:";
    $host = "host=localhost;"; //pode ser um endereço ip se tiver hospedagem ou dominio
    $nomeDataBase = "dbname= film;";
    $port = "5432;";

    //cria uma instancia de PDO para conexão com PostGresSQL
    $dbh = new PDO($origemDsn . " "  . $host . $port . $nomeDataBase, $usuario, $senha);                                       

   
    //preparando consulta com marcadores de posição (?)
    $stmt = $dbh->prepare("CALL sp_returns_string(?)");

    $stmt->bindParam(1, $return_value, PDO::PARAM_STR, 4000);

    //chame o procedimento armazenado
    $stmt->execute();

    print "procedure retornou $return_value </br>";
    
    //fecha uma conexão que esta ativa no objeto pdo, null em todas referencias, e no objeto PDOStatment também, que manipula as consultas preparadas 
    $dbh = null;
    $stmt = null;

} catch (PDOException $e) {
    print "Error!: <pre><code>" . $e->getMessage() . "</code></pre>";
    //sair do script
    die();
}

?>