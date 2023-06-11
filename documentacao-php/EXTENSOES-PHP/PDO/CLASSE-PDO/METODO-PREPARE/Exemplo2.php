<?php

/** 
 * * EXEMPLO #2 MODELO DE INSTRUÇÃO SQL COM PARÂMETROS DE PONTO DE INTERROGAÇÃO 
 * 
 * 
*/


try {
    /*Conecte-se a um banco de dados PostGreSQL usando a invocação do driver*/
    $usuario = "postgres"; //nome de usuario dsn
    $senha = "123"; //senha de usuario dsn
    $origemDsn = "pgsql: "; //nome do driver PDO
    $host = "host=localhost;"; //pode ser um endereço ip se tiver hospedagem ou dominio ou 127.0.0.1
    $nomeDataBase = "dbname= db_dvd_rental;"; //banco de dados
    $port = "port=5432;"; //porta em que o usuario esta conectado
    //ao instancia um objeto que pdo que ira representar uma conexao com o banco de dados, vamos utilizar especificação de argumento para invocação de driver, o dsn tem que estar completo
    $dbh = new PDO($origemDsn . $host . $port . $nomeDataBase, $usuario, $senha);                                       
    //seleciona nomes de atores que começam com ? maiusculo
    $sqlValido = 'SELECT * FROM actor WHERE first_name LIKE ?';     
    $objetoPdoStatment = $dbh->prepare($sqlValido);
    //setando valor do marcador de paramentro de posição de ponto de interrogação pertencente a consulta, junto com um metacaractere para usar junto com o operador like
    $objetoPdoStatment->execute(array('E%'));
    $resultadosAtores = $objetoPdoStatment->fetchAll();
?>  
    <h3>Atores selecionados</h3>
    <h5>Nomes de atores que começam com a letra E</h5>
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
    </table>
<?php
    //setando valor do marcador de parametro de posição   representando por ponto de interrogação, pertencente a consulta, junto com um metacaractere para usar junto com o operador like
    $objetoPdoStatment->execute(array('H%'));
    $resultadosAtores2 = $objetoPdoStatment->fetchAll();
?>
     <h3>Atores Selecionados</h3>
    <h5>Nomes de atores que começam com a letra H</h5>
    <table>
        <tr>
            <th>Id Ator</th>
            <th>Primeiro Nome</th>
            <th>Ultimo Nome</th>
            <th>Ultima Atualização</th>
        </tr>
<?php 

    foreach($resultadosAtores2 as $row) {
        echo "<tr>
            <td>{$row['actor_id']}</td>
            <td>{$row['first_name']}</td> 
            <td>{$row['last_name']}</td>
            <td>{$row['last_update']}</td>
        </tr>";
    }
?>
    </table>
<?php
    //fecha uma conexão que esta ativa no objeto pdo, null em todas referencias, e no objeto PDOStatment também, que manipula as consultas preparadas 
    $dbh = null;
    $stmt = null;

} catch (PDOException $e) {
    print "Error!: <pre><code>" . $e->getMessage() . "</code></pre>";
    //sair do script
    die();
}

?>