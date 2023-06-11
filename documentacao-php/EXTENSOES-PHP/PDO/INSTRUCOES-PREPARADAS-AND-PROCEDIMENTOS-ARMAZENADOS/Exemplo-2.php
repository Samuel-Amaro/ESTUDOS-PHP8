<?php

/**
 * * EXEMPLO #2 INSERÇÕES REPETIDAS USANDO INSTRUÇÕES PREPARADAS
 * 
 *  Este exemplo executa uma consulta INSERT substituindo a name e a value pelos ? marcadores de posição
*/



//se caso de um erro ao estabelecer conexão com o MYSQL,
//capture o erro de exceção um PDOException com o catch

try {
    //estabelecendo uma conexão ao criar uma instancia da classe PDO, independente do drive que for usar
    //a origem do banco de dados e conhecida pelo DSN, e nome de usuario e senha

    $usuario = "root";
    $senha = "[96284269]Ai";
    $origemDsn = "mysql:";
    $host = "host=localhost;"; //pode ser um endereço ip se tiver hospedagem ou dominio
    $nomeDataBase = "dbname= livraria;";
    $port = "3306;";

    //cria uma instancia de PDO para conexão com mySQL
    $dbh = new PDO($origemDsn . " "  . $host . $port . $nomeDataBase, $usuario, $senha);                                       

    //preparando consulta com marcadores de posição (?)
    $stmt = $dbh->prepare("INSERT INTO livraria.cliente (codigo, nome, cidade, cep, estado, referencia, cpf, cnpj, tipo_cliente) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);");
    
    //setando valores na consulta por meio dos marcadores de posição (?), valores vem atraves das variaveis
    $stmt->bindParam(1, $codigo); //coluna id
    $stmt->bindParam(2, $nome); //coluna nome
    $stmt->bindParam(3, $cidade); //coluna cidade
    $stmt->bindParam(4, $cep); //coluna cep
    $stmt->bindParam(5, $estado); //coluna estado
    $stmt->bindParam(6, $referencia); //coluna referencia
    $stmt->bindParam(7, $cpf); //coluna cpf
    $stmt->bindParam(8, $cnpj); //coluna cnpj
    $stmt->bindParam(9, $tipo_cliente); //coluna tipo cliente

    //variaveis que representa os valores da coluna, para serem inseridos na consulta SQL Preparada
    $codigo = 9;
    $nome = 'Julieta Ramos Nogueira';
    $cidade = 'São jose do rio preto';
    $cep = '23215-876';
    $estado = 'São paulo';
    $referencia = 'proximo do restaurante total 90';
    $cpf =  '145.231.654-00';
    $cnpj = '123456789';
    $tipo_cliente = 'Fisico';

    //insere registro do cliente na linha 9 na tabela
    $stmt->execute();

    //insira outra linha com valores diferentes
    $codigo = 10;
    $nome = 'Mahamed Athalaupa';
    $cidade = 'Formosa';
    $cep = '432145-90';
    $estado = 'Goias';
    $referencia = 'Proximo ao corpo de bombeiros';
    $cpf =  '123.435.765-00';
    $cnpj = '0987654321';
    $tipo_cliente = 'Fisico';

    //inseri outro registro do cliente na linha 10 na tabela
    $stmt->execute();

    //Retorna o número de linhas afetadas pela última instrução SQL
    echo "<p>Inseriu {$stmt->rowCount()} linha na tabela!</p>";

    //fecha uma conexão que esta ativa no objeto pdo, null em todas referencias, e no objeto PDOStatment também, que manipula as consultas preparadas 
    $dbh = null;
    $stmt = null;

} catch (PDOException $e) {
    print "Error!: <pre><code>" . $e->getMessage() . "</code></pre>";
    //sair do script
    die();
}

?>