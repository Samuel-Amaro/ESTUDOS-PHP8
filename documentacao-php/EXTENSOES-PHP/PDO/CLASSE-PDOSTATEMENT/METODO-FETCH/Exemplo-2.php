<?php

const USUARIO = "postgres"; //nome de usuario dsn
const SENHA = "123"; //senha de usuario dsn
const ORIGEN_DSN = "pgsql: "; //nome do driver PDO
const HOST = "host=localhost;"; //pode ser um endereço ip se tiver hospedagem ou dominio ou 127.0.0.1
const DATA_BASE = "dbname= db_dvd_rental;"; //banco de dados
const PORT = "port=5432;"; //porta em que o usuario esta conectado

include("../Connection.php");


/**
 * * EXEMPLO #2 BUSCANDO LINHAS COM UM CURSOR DE ROLAGEM
 *  
*/

try {    
    //instancia um objeto da classe conexao, criado uma nova conexão com o banco de dados, especificado pelos argumentos
    $objectCon = new Connection(USUARIO, SENHA, ORIGEN_DSN, HOST, DATA_BASE, PORT);
    //chama a conexão estabelecida
    $connection = $objectCon->getConnection();
    lerDadosParaFrente($connection);
    lerDadosParaTras($connection);

} catch (PDOException $e) {
    print "Error!: <pre><code>" . $e->getMessage() . "</code></pre>";
    //sair do script
    die();
}finally{
    //fecha uma conexão que esta ativa no objeto pdo, null em todas referencias, e no objeto PDOStatment também, que manipula as consultas preparadas 
    $connection = null;
    $stmt = null;
}

function lerDadosParaFrente($con) {
    //intrução SQL
    $sqlValido = 'SELECT * FROM actor 
    ORDER BY first_name LIMIT 10';
    //prepara um consulta retornando um objeto da class PdoStatement
    //PDO::ATTR_CURSOR(int): Seleciona o tipo de cursor. PDO atualmente oferece suporte a PDO::CURSOR_FWDONLY e PDO::CURSOR_SCROLL. Continue, a PDO::CURSOR_FWDONLY menos que saiba que precisa de um cursor de rolagem.
    //PDO::CURSOR_SCROLL: Crie um objeto PDOStatement com um cursor de rolagem. Passe as constantes PDO::FETCH_ORI_ * para controlar as linhas obtidas do conjunto de resultados.
    //add um atributo nessa consulta preparada, para que ative o cursor de rolagem de resultados, fazendo o array ter uma chave e valor representando um atributo para a consulta preparada
    $stmt = $con->prepare($sqlValido, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    //executa uma consulta preparada
    $stmt->execute();
?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Metodo execute PDOStatement::fetch</title>
    </head>
    <body>
        <h2>Leitura para frente</h2>
        <table>
            <tr>
                <th>Id Ator</th>
                <th>Primeiro Nome</th>
                <th>Ultimo Nome</th>
                <th>Ultima Atualização</th>
            </tr>
<?php
    //PDO::FETCH_NUM(int): Especifica que o método fetch deve retornar cada linha como uma array indexada pelo número da coluna, conforme retornado no conjunto de resultados correspondente, começando na coluna 0.
    //PDO::FETCH_ORI_NEXT: Busca a próxima linha no conjunto de resultados. Válido apenas para cursores roláveis.
    //o fetch metodo busca somente a proxima linha do conjunto de resultados, mas como esta utilizando um loop de repetição, isso permite chamar o metodo varias vezes e trazer a cada chamada uma nova linha
    while($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
        $data = "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
        print $data;
    }
?>
    </table>
<?php
}

function lerDadosParaTras($con) {
    $sqlValido = 'SELECT * FROM actor 
    ORDER BY first_name LIMIT 10';
    $stmt = $con->prepare($sqlValido, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    $stmt->execute();
    //PDO::FETCH_ORI_LAST: Busca a última linha do conjunto de resultados. Válido apenas para cursores roláveis.
    //essa linha de resultado mostra o ultimo registro obtido do resultado. isso e a ultima linha do resultado
    $row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_LAST);
?>
            <h2>Leitura de tras para frente</h2>
            <table>
                <tr>
                    <th>Id Ator</th>
                    <th>Primeiro Nome</th>
                    <th>Ultimo Nome</th>
                    <th>Ultima Atualização</th>
                </tr>
<?php
    do{
        $data = "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
        print $data;
        //PDO::FETCH_ORI_PRIOR: Busque a linha anterior no conjunto de resultados. Válido apenas para cursores roláveis
        //ira buscar a linha anterior, que e a anterior ? como a primeira linha a ser mostrada e a ultima linha, a anterior da ultima e a penultima, a anterior da penultima e antipenultima, e fazendo a leitura da ultima para o inicio
    }while($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_PRIOR)); 
?>
            </table>
        </body>
    </html>

<?php
}

?>