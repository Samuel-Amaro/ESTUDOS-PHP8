<?php

/**
 * * EXEMPLO #5 EXECUTE UMA INSTRUÇÃO PREPARADA USANDO ARRAY PARA A CLAUSULA IN
 * 
 *  
*/

//operador PostgreSQL IN na WHERE cláusula para verificar se um valor corresponde a qualquer valor em uma lista.
//Você usa o IN operador na WHERE cláusula para verificar se um valor corresponde a qualquer valor em uma lista de valores.



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
    /*Execute uma PDOStatemente usando uma array de valores para uma cláusula IN*/
    $paramentros = array(1, 21, 63, 171);
    /*Crie uma string para os marcadores de posição de parâmetro preenchidos com o número de parâmetros*/
    $place_holders = implode(',', array_fill(0, count($paramentros), '?'));
    /*
     * Isso prepara a declaração com marcadores de posição não nomeados suficientes para cada valor em nosso array $ params. Os valores da matriz $ params são então vinculados ao marcadores de posição na declaração preparada quando a declaração é executada.
     Isso não é a mesma coisa que usar PDOStatement:: bindParam(), pois isso
    requer uma referência à variável. PDOStatement::execute() vincula apenas em vez disso, por valor.
    */
    //intrução SQL com um marcador de paramentro posicional
    $objetoPdoStatment = $dbh->prepare("SELECT * FROM actor WHERE actor_id IN ($place_holders)");
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
        <h5>Atores selecionados aleatoriamente</h5>
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