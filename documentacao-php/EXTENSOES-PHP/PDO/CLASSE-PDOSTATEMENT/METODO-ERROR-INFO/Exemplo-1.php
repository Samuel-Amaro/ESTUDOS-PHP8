<?php 

/**
 * * EXEMPLO #1
 * 
 *  Exibindo campos errorInfo () para uma conexão PDO_ODBC com um banco de dados DB2
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
    //sql da consulta, que provoca um erro para usar o erroInfo de um pdoStatement
    $sqlValido = 'SELECT * FROM xxx 
    ORDER BY first_name LIMIT 10';
    //prepara um consulta, e retorna um pdoStatement
    $stmt = $connection->prepare($sqlValido);
    //executa a consulta
    $stmt->execute();  
}catch (PDOException $e) {
    echo "<h2>PDOStatement::errorInfo()</h2>";
    //este metodo do PDOStatement, retorna uma array de informações de erro sobre a última operação executada por este identificador de instrução.
    //da ultima consulta executada
    $arr = $stmt->errorInfo();
    echo "<b>CODIGO ERRO SQLSTATE:</b> {$arr[0]} <b>CODIGO ERRO DRIVER:</b> {$arr[1]} <b>MESSAGE DE ERRO:</b> {$arr[2]} </br>";
    print_r($arr);
}finally{
    //fecha uma conexão que esta ativa no objeto pdo, null em todas referencias, e no objeto PDOStatment também, que manipula as consultas preparadas 
    $connection = null;
    $stmt = null;
}
?>