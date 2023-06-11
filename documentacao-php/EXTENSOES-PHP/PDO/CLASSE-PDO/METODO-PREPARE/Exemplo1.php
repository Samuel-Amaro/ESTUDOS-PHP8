<?php

/**
 * * EXEMPLO #1 MODELO DE INSTRUÇÃO SQL COM PARÂMETROS NOMEADOS
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
    $sqlValido = 'SELECT * FROM actor WHERE first_name LIKE :primeira_letra_nome'; 
    //Esta array contém um ou mais pares chave => valor para definir valores de atributo para o objeto PDOStatement que este método retorna.
    //ATRIBUTO: PDO::ATTR_CURSOR (int) Seleciona o tipo de cursor.
    //VALOR DO ATRIBUTO: PDO atualmente suporta PDO::CURSOR_FWDONLY e PDO::CURSOR_SCROLL. Continue, a PDO::CURSOR_FWDONLY menos que saiba que precisa de um cursor de rolagem.
    //PDO::CURSOR_FWDONLY: Crie um objeto PDOStatement com um cursor somente para frente. Esta é a escolha padrão do cursor, pois é o padrão de acesso a dados mais rápido e comum em PHP.
    $objetoPdoStatment = $dbh->prepare($sqlValido, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY)); 
    //setando valor do marcador de posição de ponto de interrogação pertencente a consulta, junto com um metacaractere para usar junto com o operador like
    $objetoPdoStatment->execute(array(':primeira_letra_nome' => 'C%'));
    $resultadosAtores = $objetoPdoStatment->fetchAll();
?>  
    <h3>Atores selecionados</h3>
    <h5>Nomes de atores que começam com a letra C</h5>
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
    //setando valor do marcador de parametro nomeado  pertencente a consulta, junto com um metacaractere para usar junto com o operador like
    $objetoPdoStatment->execute(array(':primeira_letra_nome' => 'A%'));
    $resultadosAtores2 = $objetoPdoStatment->fetchAll();
?>
    <h3>Atores Selecionados</h3>
    <h5>Nomes de atores que começam com a letra A</h5>
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