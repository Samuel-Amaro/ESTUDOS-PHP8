<?php 

/**
 * * EXEMPLO #4 INSTANCIANDO UMA CLASSE PARA CADA RESULTADO
 * 
 *  O exemplo a seguir demonstra o comportamento do PDO::FETCH_CLASS estilo de busca.
*/

const USUARIO = "postgres"; //nome de usuario dsn
const SENHA = "123"; //senha de usuario dsn
const ORIGEN_DSN = "pgsql: "; //nome do driver PDO
const HOST = "host=localhost;"; //pode ser um endereço ip se tiver hospedagem ou dominio ou 127.0.0.1
const DATA_BASE = "dbname= db_dvd_rental;"; //banco de dados
const PORT = "port=5432;"; //porta em que o usuario esta conectado

include("../Connection.php");

//declara uma classe chamada Ator
class Ator{
    //atributo(propriedade da classe) tem que ser iguais ao nomes das colunas, e mesma quantidade
    private int $actor_id;
    private string $first_name;
    private string $last_name;
    private string $last_update;
    //construtor da class
    public function __construct()
    {
        
    }
}

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
    //executa a consulta select
    $stmt->execute();
    //PDO::FETCH_CLASS: Retorna instâncias da classe especificada, mapeando as colunas de cada linha para propriedades nomeadas na classe
    $result = $stmt->fetchAll(PDO::FETCH_CLASS, "Ator");
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