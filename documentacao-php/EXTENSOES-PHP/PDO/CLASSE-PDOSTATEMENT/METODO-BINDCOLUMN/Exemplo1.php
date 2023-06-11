<?php

/**
 * * EXEMPLO #1 VINCULANDO A SAÍDA DO CONJUNTO DE RESULTADOS A VARIÁVEIS PHP
 * 
 *  Vincular colunas no conjunto de resultados a variáveis ​​PHP é uma maneira eficaz de tornar os dados contidos em cada linha imediatamente disponíveis para seu aplicativo. O exemplo a seguir demonstra como o PDO permite vincular e recuperar colunas com uma variedade de opções e com padrões inteligentes.
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
    //intrução SQL pura sem nenhum marcador de posição de paramentro
    $sqlValido = 'SELECT cidade.city, pais.country FROM city AS cidade
    INNER JOIN country AS pais ON cidade.country_id = pais.country_id;'; 
    $objetoPdoStatment = $dbh->prepare($sqlValido);
    //executa uma instrução preparada
    $objetoPdoStatment->execute();
    // Vincula uma coluna a uma variável PHP
    /*Vincular pelo número da coluna*/
    $objetoPdoStatment->bindColumn(1, $cidade);
    $objetoPdoStatment->bindColumn(2, $pais);
    /*Vincular pelo nome da coluna*/
    //$objetoPdoStatment->bindColumn('city', $cidades);
    ?>
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Metodo execute PDOStatement::bindColumn</title>
        </head>
        <body>
            <h3>Cidades Aleatorias</h3>
            <h5>Cidades aleatorias</h5>
            <table>
                <tr>
                    <th>Cidade</th>
                    <th>Pais</th>
                </tr>
    <?php
    //Especifica que o método fetch deve retornar TRUE e atribuir os valores das colunas no conjunto de resultados às variáveis ​​PHP às quais foram vinculados com os métodos PDOStatement::bindParam ou PDOStatement::bindColumn.
    while($objetoPdoStatment->fetch(PDO::FETCH_BOUND)) {
        print "<tr>
                <td>$cidade</td>
                <td>$pais</td>
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