<?php

/**
 * * EXEMPLO #2 EXECUTE UMA DECLARAÇÃO PREPARADA COM MARCADORES DE POSIÇÃO DE PONTO DE INTERROGAÇÃO 
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
    $sqlValido = 'SELECT cidade.city, pais.country FROM city AS cidade
    INNER JOIN country AS pais ON cidade.country_id = pais.country_id AND pais.country = ?;'; 
    $objetoPdoStatment = $dbh->prepare($sqlValido);
    /*variavel que contem o valor do paramentro de posição nomeado na SQL instrução*/
    $nomePais = 'China';
    /*Vincula um parâmetro ao nome da variável especificada, vincula o paramentro de posição de ponto de interrogação indexado ?, que e o primeiro parametro que esta dentro da consulta preparada SQL,  a variavel $nomePais, sendo que essa variavel e do tipo string*/
    $objetoPdoStatment->bindParam(1, $nomePais, PDO::PARAM_STR);
    //executa uma instrução preparada
    $objetoPdoStatment->execute();
    $resultadosAtores = $objetoPdoStatment->fetchAll();
?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Metodo execute PDOStatement::bindParam</title>
    </head>
    <body>
        <h3>Cidades do brasil</h3>
        <h5>Cidades aleatorias da china</h5>
        <table>
            <tr>
                <th>Cidade</th>
                <th>Pais</th>
            </tr>
<?php
        foreach($resultadosAtores as $row) {
            echo "<tr>
                   <td>{$row['city']}</td>
                   <td>{$row['country']}</td> 
            </tr>";
        }
?>
    </body>
    </html>
<?php
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
