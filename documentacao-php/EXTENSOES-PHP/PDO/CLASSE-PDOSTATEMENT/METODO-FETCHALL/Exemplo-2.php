<?php 

/**
 * * EXEMPLO #2 OBTENDO TODOS OS VALORES DE UMA ÚNICA COLUNA DE UM CONJUNTO DE RESULTADOS
 * 
 *  O exemplo a seguir demonstra como retornar todos os valores de uma única coluna de um conjunto de resultados, mesmo que a própria instrução SQL possa retornar várias colunas por linha.
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
    /*Busca todos os valores da segunda coluna*/
    print("<p><b>Busca todas os valores da segunda coluna first_name</b></p>");
    //Busca as linhas restantes de um conjunto de resultados
    //Para retornar uma array que consiste em todos os valores de uma única coluna do conjunto de resultados, especifique PDO::FETCH_COLUMN. Você pode especificar qual coluna deseja com o column parâmetro.
    //result vai retornar um array com todos os valores de cada linha de registro somente da 2 coluna de cada linha
    $result = $stmt->fetchAll(PDO::FETCH_COLUMN, 1);
    var_dump($result);
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