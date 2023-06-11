<?php 

/**
 * * EXEMPLO #1
 * 
 * Exemplo # 1 Buscando linhas usando diferentes estilos de busca
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
    //intrução SQL
    $sqlValido = 'SELECT * FROM actor 
    ORDER BY first_name ASC LIMIT 10;'; 
    //prepara um consulta retornando um objeto da class PdoStatement
    $objetoPdoStatment = $dbh->prepare($sqlValido);
    //executa uma instrução preparada sem um marcador de paramentro e valores a serem passado para consulta
    $objetoPdoStatment->execute();
    
    /*Exercicio PdoStatement::fetch styles, buscar um resultado de uma consulta preparada de diferentes modos e estilos*/
    print("<h2>PDO::FETCH_ASSOC</h2>");
    print("<p>Retorna a próxima linha como uma array indexada pelo nome da coluna, cada chave do array e um coluna que vem da tabela que foi feita a consulta.</p>");
    //busca a proxima linha de um conjunto de resultados
    $resultadosAtores = $objetoPdoStatment->fetch(PDO::FETCH_ASSOC);
    print_r($resultadosAtores);
    print("</br>");

    print("<h2>PDO::FETCH_BOTH</h2>");
    print("<p>Retorna a próxima linha como uma array indexada pelo nome e número da coluna</p>");
    $resultadosAtores = $objetoPdoStatment->fetch(PDO::FETCH_BOTH);
    print_r($resultadosAtores);
    print("</br>");

    print("<h2>PDO::FETCH_LAZY</h2>");
    print("<p>Retorna a próxima linha como um objeto anônimo com nomes de coluna como propriedades</p>");
    $resultadosAtores = $objetoPdoStatment->fetch(PDO::FETCH_LAZY);
    print_r($resultadosAtores);
    print("</br>");

    print("<h2>PDO::FETCH_OBJ</h2>");
    print("<p>Retorna a próxima linha como um objeto anônimo com nomes de coluna como propriedades</p>");
    $resultadosAtores = $objetoPdoStatment->fetch(PDO::FETCH_OBJ);
    print_r($resultadosAtores);
    print("</br>");
    
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