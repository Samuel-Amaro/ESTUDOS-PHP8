<?php 

/**
 * * EXEMPLO #3 AGRUPANDO TODOS OS VALORES POR UMA ÚNICA COLUNA
 * 
 *  O exemplo a seguir demonstra como retornar uma array associativa agrupada pelos valores da coluna especificada no conjunto de resultados. A array contém as chaves: valores do id de cada linha de registro são retornados como arrays que contêm primeiro nome actor, por id;
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
    $sqlValido = 'INSERT INTO actor(first_name, last_name, last_update)VALUES (?, ?, NOW());';
    //prepara um consulta, e retorna um pdoStatement
    $stmt = $connection->prepare($sqlValido);
    //executa a consulta, insert 01
    $stmt->execute(array('Hallan', 'Mohaemd'));
    //executa a consulta, insert 02
    $stmt->execute(array('Monark', 'Flow'));  
    /*Busca todos os valores da actor id*/
    $sqlSelect = "SELECT * FROM actor 
    ORDER BY first_name";
    //prepara consulta select 
    $stmt = $connection->prepare($sqlSelect);
    //executa consulta select
    $stmt->execute();
    /*Valores de grupo pela primeira coluna*/
    //Para retornar uma array que consiste em todos os valores de uma única coluna do conjunto de resultados, especifique PDO::FETCH_COLUMN.
    //Para retornar uma array associativa agrupada pelos valores de uma coluna especificada, bit a bit-OR PDO::FETCH_COLUMN com PDO::FETCH_GROUP.
    //PDO::FETCH_GROUP ( int )
    //Retorno de grupo por valores. Normalmente combinado com PDO::FETCH_COLUMN ou PDO::FETCH_KEY_PAIR.
    var_dump($stmt->fetchAll(PDO::FETCH_COLUMN | PDO::FETCH_GROUP));
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