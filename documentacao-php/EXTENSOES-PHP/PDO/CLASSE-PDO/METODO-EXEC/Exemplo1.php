<?php

/**
 * * EXEMPLO #1 EMITINDO UMA INSTRUÇÃO DELETE
 * 
 *  Conte o número de linhas excluídas por uma instrução DELETE sem cláusula WHERE.
*/


try {
    /*Conecte-se a um banco de dados PostGreSQL usando a invocação do driver*/
    $usuario = "postgres"; //nome de usuario dsn
    $senha = "123"; //senha de usuario dsn
    $origemDsn = "pgsql: "; //nome do driver PDO
    $host = "host=localhost;"; //pode ser um endereço ip se tiver hospedagem ou dominio ou 127.0.0.1
    $nomeDataBase = "dbname= testedb;"; //banco de dados
    $port = "port=5432;"; //porta em que o usuario esta conectado
    //ao instancia um objeto que pdo que ira representar uma conexao com o banco de dados, vamos utilizar especificação de argumento para invocação de driver, o dsn tem que estar completo
    $dbh = new PDO($origemDsn . $host . $port . $nomeDataBase, $usuario, $senha);                              
   
    /*deleta todas linhas da tabela fruits*/
    $contador = $dbh->exec("DELETE FROM fruits");

    if($contador === 0){
        echo "Nenhuma linha ta tabela fruit foi deletada! </br>";
    }else{
        print("Deletou $contador linhas. </br>");
    }
} catch (PDOException $e) {
    print "Error!: <pre><code>" . $e->getMessage() . "</code></pre>";
    echo "<br> PDO::errorInfo(): <br>";
    //$dbh->errorInfo() retorna o array com as informações de erro
    print_r("<pre><code>");
    print_r($dbh->errorInfo()); 
    print_r("</code></pre>");
    //sair do script
    die();
}finally{
    //fecha uma conexão que esta ativa no objeto pdo, null em todas referencias, e no objeto PDOStatment também, que manipula as consultas preparadas 
    $dbh = null;
    $stmt = null;
}

?>