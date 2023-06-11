<?php 

/**
 * * EXEMPLO #1
 * 
 * Buscar todoas as linas restantes em um conjunto de resultados 
*/


const USUARIO = "postgres"; //nome de usuario dsn
const SENHA = "123"; //senha de usuario dsn
const ORIGEN_DSN = "pgsql: "; //nome do driver PDO
const HOST = "host=localhost;"; //pode ser um endereço ip se tiver hospedagem ou dominio ou 127.0.0.1
const DATA_BASE = "dbname= db_dvd_rental;"; //banco de dados
const PORT = "port=5432;"; //porta em que o usuario esta conectado

include("../Connection.php");

try {
    //instancia um objeto da classe conexao, criado uma nova conexão com o banco de dados, especificado pelos argumentos
    $objectCon = new Connection(USUARIO, SENHA, ORIGEN_DSN, HOST, DATA_BASE, PORT);
    //chama a conexão estabelecida
    $connection = $objectCon->getConnection();
    //sql da consulta
    $sqlValido = 'SELECT * FROM actor 
    ORDER BY first_name LIMIT 10';
    //prepara um consulta, e retorna um pdoStatement
    $stmt = $connection->prepare($sqlValido);
    //executa a consulta
    $stmt->execute();  
    /*Busca todas as linhas restantes no conjunto de resultados*/
    print("<p><b>Busca todas as linhas restantes no conjunto de resultados</b></p>");
    //Busca as linhas restantes de um conjunto de resultados
    //se não informar o mode paramentro o padrão e PDO::FETCH_BOTH: retorna uma array indexada pelo nome da coluna e número da coluna indexada 0 conforme retornado em seu conjunto de resultados
    $result = $stmt->fetchAll();
    print_r($result);
}catch (PDOException $e) {
    print "Error!: <pre><code>" . $e->getMessage() . "</code></pre>";
    //sair do script
    die();
}finally{
    //fecha uma conexão que esta ativa no objeto pdo, null em todas referencias, e no objeto PDOStatment também, que manipula as consultas preparadas 
    $connection = null;
    $stmt = null;
}

?>