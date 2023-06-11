<?php

/**
 * * EXEMPLO #6 USO INVÁLIDO DE ESPAÇO RESERVADO
 * 
 *  
*/

//se caso de um erro ao estabelecer conexão com o MYSQL,
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

    //preparando consulta com marcadores de posição (?)
    //seleciona titulos de filmes que comecem com qualquer coisa e terminem com qualquer coisa mas que tenha Gold no meio do titulo
    //ESSA CONSULTA PREPARARA DA ERRO, PORQUE OS METACACTERES DE LIKE TEM QUE IR NA PLACEHOLDER
    //$stmt = $dbh->prepare("SELECT * FROM film WHERE title LIKE '%?%';");

    //$stmt->execute(["Gold"]);

    //foreach($stmt as $row) {
   //     print_r($row);    
   // }
    
    //placeholder deve ser usado no lugar de todo o valor
    $stmt = $dbh->prepare("SELECT * FROM film WHERE title LIKE ?;");

    //LUGAR DO PLACEHOLDER ONDE CARACTERES E METACARACTERES DE CONSULTA TEM QUE IR
    $stmt->execute(["%Gold%"]);

    foreach($stmt as $row) {
        print_r($row);    
    }    
    

    //fecha uma conexão que esta ativa no objeto pdo, null em todas referencias, e no objeto PDOStatment também, que manipula as consultas preparadas 
    $dbh = null;
    $stmt = null;

} catch (PDOException $e) {
    print "Error!: <pre><code>" . $e->getMessage() . "</code></pre>";
    //sair do script
    die();
}

?>