<?php 

/**
 * * EXEMPLO #1
 * 
 *  RECUPERANDO UM CODIGO SQLSTATE
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
    //sql da consulta, provoca um erro na consulta para usar o erroCode
    $sqlValido = 'SELECT * FROM xxx 
    ORDER BY first_name LIMIT 10';
    //prepara um consulta, e retorna um pdoStatement
    $stmt = $connection->prepare($sqlValido);
    //executa a consulta
    $stmt->execute();  
}catch (PDOException $e) {
    echo "<h2>PDOStatement::errorCode()</h2>";
    //metodo que Obtém o SQLSTATE associado à última operação no identificador de instrução; de um PDOSTATEMENT
    $arr = $stmt->errorCode();
    echo "<b>CODIGO ERRO SQLSTATE:</b> {$arr} </br>";
}finally{
    //fecha uma conexão que esta ativa no objeto pdo, null em todas referencias, e no objeto PDOStatment também, que manipula as consultas preparadas 
    $connection = null;
    $stmt = null;
}
?>