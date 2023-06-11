<?php

/**
 * * EXEMPLO #2 Execute uma declaração preparada com marcadores de posição de ponto de interrogação 
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
    //intrução SQL com um marcador de paramentro de posição de ponto de interrogação
    $sqlValido = 'SELECT * FROM actor WHERE first_name LIKE ?'; 
    $objetoPdoStatment = $dbh->prepare($sqlValido);
    /*variavel que contem o valor do paramentro de posição de ponto de interrogação*/
    $primeiraLetraNome = 'Z';
    /*vincula o valor da varivel $primeiraLetraNome ao paramentro de posição indexado ? na instrução SQL preparada, especificando dois caracteres curingas para serem utilizados juntamente com o LIKE, o valor do paramentro e do tipo string, especificamos isso com uma string*/
    $objetoPdoStatment->bindValue(1, "%{$primeiraLetraNome}%", PDO::PARAM_STR);
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
        <title>Metodo execute PDOStatement::execute</title>
    </head>
    <body>
        <h3>Atores selecionados</h3>
        <h5>Nomes de atores que começam com a letra Z</h5>
        <table>
            <tr>
                <th>Id Ator</th>
                <th>Primeiro Nome</th>
                <th>Ultimo Nome</th>
                <th>Ultima Atualização</th>
            </tr>
<?php
        foreach($resultadosAtores as $row) {
            echo "<tr>
                   <td>{$row['actor_id']}</td>
                   <td>{$row['first_name']}</td> 
                   <td>{$row['last_name']}</td>
                   <td>{$row['last_update']}</td>
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
