<?php

/**
 * * EXEMPLO #2 CHAME UM PROCEDIMENTO ARMAZENADO COM UM PARÊMTRO INOUT 
*/

try {
    /*Conecte-se a um banco de dados PostGreSQL usando a invocação do driver*/
    $usuario = "postgres"; //nome de usuario dsn
    $senha = "123"; //senha de usuario dsn
    $origemDsn = "pgsql: "; //nome do driver PDO
    $host = "host=localhost;"; //pode ser um endereço ip se tiver hospedagem ou dominio ou 127.0.0.1
    $nomeDataBase = "dbname= db_dvd_rental;"; //banco de dados
    $port = "port=5432;"; //porta em que o usuario esta conectado
    //ao instancia um objeto que PDO que ira representar uma conexao com o banco de dados, vamos utilizar especificação de argumento para invocação de driver, o dsn tem que estar completo
    $dbh = new PDO($origemDsn . $host . $port . $nomeDataBase, $usuario, $senha);                                       
    //intrução SQL com um marcador de paramentro de posição nomeado
    $sqlValido = 'SELECT troca(?, ?)'; 
    $objetoPdoStatment = $dbh->prepare($sqlValido);
    /*variaveis que contem o valor do paramentro de posição de ponto de interrogação indexado*/
    $valorA = 1;
    $ValorB = 2;
    /*Vincula um parâmetro ao nome da variável especificada, vincula o paramentro de posição de ponto de interrogação indexado ?, que e o primeiro parametro que esta dentro da consulta preparada SQL*/
    $objetoPdoStatment->bindParam(1, $valorA, PDO::PARAM_INT|PDO::PARAM_INPUT_OUTPUT);
    $objetoPdoStatment->bindParam(2, $valorB, PDO::PARAM_INT|PDO::PARAM_INPUT_OUTPUT);
    //executa uma instrução preparada
    $objetoPdoStatment->execute();
    $resultadosAtores = $objetoPdoStatment->fetchAll();
    var_dump($resultadosAtores);
} catch (PDOException $e) {
    print "Error!: <pre><code>" . $e->getMessage() . "</code></pre>";
    //sair do script
    die();
}finally{
    //fecha uma conexão que esta ativa no objeto pdo, null em todas referencias, e no objeto PDOStatment também, que manipula as consultas preparadas 
    $dbh = null;
    $stmt = null;
}

?>